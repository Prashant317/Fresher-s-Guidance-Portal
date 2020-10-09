<?php session_start();
		require("header.php");
		require("checkUser.php");       	 
?>

<?php 
	
	 
//echo $sql;	 
	 


$servername = "localhost";
$username = "root";
$password = "";
$db = "tech_forum";


$con = mysqli_connect($servername, $username, $password, $db);
$sql = "UPDATE user  SET  username = '".$_POST['un']."', fullname = '".$_POST['fn']."',password='".$_POST['pwd']."',e_mail='".$_POST['e_mail']."',gender = '".$_POST['gender']."', dob = '".$_POST['dob']."',uimg = '".$_POST['ima']."',address = '".$_POST['add']."',state = '".$_POST['sta']."',country = '".$_POST['cou']."' WHERE user_id =$_SESSION[uid]";
$result=mysqli_query($con,$sql);


if($result == 1)
{
	header("location:apupdate.php");
	
	}
	else
	{
	header("location:aedit.php");
	}
?>
      
<?php require("footer.php")?>	  