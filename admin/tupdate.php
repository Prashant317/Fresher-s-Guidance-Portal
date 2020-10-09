<?php session_start();
		require("header.php"); 
      	//require("checkUser.php") 
?>

<?php 
	 
	 $con=mysqli_connect("localhost", "root","","tech_forum");
	 $sql = "UPDATE topic  SET  topic_name = '".$_POST['tn']."', topic_type = '".$_POST['tt']."'  WHERE topic_id ='".$_POST['id']."'";
	 
	 
$result=mysqli_query($con,$sql);

if($result == 1)
{
	header("location:topic.php");
	
	}
	else
	{
	header("location:tedit.php");
	}
?>
      
<?php require("footer.php")?>	  