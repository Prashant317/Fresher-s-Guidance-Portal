<?php session_start();
require("header.php");
require("checkUser.php")?>

<?php 
$qid=$_POST['qid'];
$ata=$_POST['ata'];
$uid = $_SESSION["uid"];
$sql= "INSERT INTO answer (`question_id`,`answer_detail`,`user_id`) VALUES('$qid','$ata',$uid)";
echo $sql;
//echo $sql;
$result=ExecuteQuery($sql);
if($result)
{
	header("location:questionview.php?qid=$qid");
	}
	else
	{
		echo "Error".mysqli_error($con);
		}
?>


<?php require("footer.php")?>