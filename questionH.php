<?php session_start();
 require("header.php");
require("checkUser.php")?>


<?php
$stid = $_POST['stid'];
$ta = $_POST['ta'];
$hd=$_POST['head'];
$uid = $_SESSION["uid"];


$sql="INSERT INTO question ( `heading`,`question_detail`, `datetime` ,`user_id`, `subtopic_id`) VALUES ( '$hd','$ta', now(),'$uid', '$stid')";
$result=Executequery($sql);

if ($result == 1)
	header ("location:questions.php?id=$stid");
?>
<?php require("footer.php")?>