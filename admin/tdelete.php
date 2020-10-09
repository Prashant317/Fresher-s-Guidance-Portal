<?php session_start();
 require("utility.php")?>
<?php require("header.php");
require("checkUser.php");?>
<?php
$uid = $_GET['id'];
$con=mysqli_connect("localhost", "root","","tech_forum");
$qry = "DELETE FROM topic WHERE topic_id='".$uid."'";

$result = mysqli_query($con,$qry);
if($result)
{
	
	header ("location:topic.php");
	}
	else
	{
		echo "Not Done";
		}

?>
<?php require("footer.php")?>