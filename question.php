<?php  session_start();
 require("header.php"); 
	require("checkuser.php");
?>
	<script type="text/javascript">
		function check(f)
		{
			if(f.head.value=="")
			{
				document.getElementById("a").innerHTML="Please,Enter the heading";
				//alert("Please,Enter The Heading");
				f.head.focus();
				return false;
				
				}
				else if(f.ta.value=="")
				{
					document.getElementById("b").innerHTML="Please,Enter The Question";
					//alert("Please,Enter The Question")}
					f.ta.focus();
					return false;
		}
			   else
			   return true;
			}
			
			
	</script>
<form action="questionH.php" method="POST" onsubmit="return check(this)">
<input type="hidden" value="<?php echo $_GET["stid"] ?>" name="stid" />
<table>
<tr>Heading:<br><textarea rows="1" cols="30" name="head"></textarea><span id='a' style="color: red;"></span></tr><br/>
<tr><tr>Enter your question:<br/><textarea id="result" rows="3" cols="60" name="ta" ></textarea><span id='b' style="color: red;"></span></tr><br/>
<tr><td><input type="submit" value="Post">&nbsp;&nbsp;<input type="button" id="dd" onclick="startconvert();" value="Record"></td><td><input type="reset" value="Clear"></td></tr>
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

<?php require("footer.php"); ?>