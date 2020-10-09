<?php session_start();
 require("header.php");
 
 if ($_SESSION["fn"] == null){
 	header("location:unreg.php");
	exit();
 }


 
 require("checkUser.php");
 ?>
 
 <script type="text/javascript">
	document.getElementById("aforum").className="active";
</script>
<style>
.heading{
	color:green;
},
</style>
<?php
	$topic = ExecuteQuery ("SELECT * FROM topic");
	
	while ($r1 = mysqli_fetch_array($topic))
	{
			echo "<div class='heading'>$r1[topic_name]</div>";
		
			$stopic = ExecuteQuery ("SELECT * FROM subtopic WHERE topic_id=$r1[topic_id]");	
			echo "<div class='box'>";
			
			while ($r2 = mysqli_fetch_array ($stopic) )
			{
				
				echo "<div class='sub-heading'>
						<a href='questions.php?id=$r2[subtopic_id]'> <strong>Sub-Topic : </strong> $r2[subtopic_name]</a>
						
					</div>";
				echo "<p><strong>Description : </strong>$r2[subtopic_description]</p>";
				echo "<br><br>";	
			}
			echo "</div>";
	}
	
	
?>

<?php require("footer.php"); ?>