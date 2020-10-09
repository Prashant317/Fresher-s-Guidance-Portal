<?php session_start();
require("header.php");
require("checkUser.php")?>

<script type="text/javascript">
	function check(f)
	{
		if(f.ata.value=="")
		{
			document.getElementById("spuid").innerHTML = "Please, Enter Answer.";
			//alert("Please,Enter The Answer")
			f.ata.focus();
			return false;
			}
			else
			return true;
		}
</script>

<?php
$sql="SELECT heading from question where question_id="+$_GET['id'];
$rows=ExecuteQuery($sql);
$row=mysqli_fetch_array($rows);
?>

<form action="answerH.php" method="POST" onsubmit="return check(this)">
<input type="hidden" value="<?php echo $_GET["id"] ?>" name="qid" />
<table>
<tr><td><b>Replied : <?php echo $row["heading"] ?></b></td></tr>
<tr><td>Answer:</td></tr><br/>
<tr><td><textarea rows="4" cols="38" id="result" name="ata"></textarea><span id='spuid' style="color: red;"></span></td></tr><br/>
<tr><td><input type="submit" value="Go"><input type="button" id="dd" onclick="startconvert();" value="Record"><input type="button" id="trans" value="Translate" /></td></tr>
</table>
</form>
<script type="text/javascript">
		var r  = document.getElementById('result');
		function startconvert()
		{
			if('webkitSpeechRecognition' in window)
			{
				var speechRecognizer = new webkitSpeechRecognition();
				speechRecognizer.continuous = true;
				speechRecognizer.interimResults = true;
				speechRecognizer.lang = 'en-IN';
				speechRecognizer.start();
				speechRecognizer.onresult = function(event)
				{
					var finalTranscripts = '';
					var interimTranscripts = '';
					for(var i=0;i<event.results.length;i++)
					{
						var transcript = event.results[i][0].transcript;
						transcript.replace("\n","<br>");
						if(event.results[i].isFinal)
						{
							finalTranscripts+=transcript;
						}
						else
						{
							interimTranscripts+=transcript;
						}
					}
					r.innerHTML = finalTranscripts + interimTranscripts;
				};
				speechRecognizer.onerror = function(event){
					console.log(event);
				};
			}
			else
			{
				r.innerHTML = "Browser not supported.";
			}
		}

		$('#trans').unbind().click(function()
		{
			$.ajax({

				type : 'POST',
				url : 'translate.php',
				data: {
					msg : $('#result').val()
				},
				success : function(data)
				{
					$('#result').val(data);
				}
			});
		});
	</script>

<?php require("footer.php")?>