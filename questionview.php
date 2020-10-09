<?php session_start(); 
require("header.php");
require("checkUser.php");
?>


<?php 
$upd="update question set views=views+1 where question_id=$_GET[qid]";
$res=ExecuteNonQuery($upd);
	
$str="SELECT * from question, user where  user.user_id=question.user_id AND question_id=$_GET[qid]";
	$result=ExecuteQuery($str);
	
	$no_rows = mysqli_num_rows($result);
	$head="";
	
	if ($no_rows > 0)
	{	
		while($row = mysqli_fetch_array($result))
		{
			
			
			$head = $row['heading'];
			echo "<h4>";
			echo $head;	
			echo "</h4>";
			echo "<span class='box2'>";
			echo "<span class='head'><a href='answer.php?id=$_GET[qid]'>REPLY</a></span>";
			
			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			<b>$head</b><br/>
			$row[datetime]<br/><br/>
			$row[question_detail]</tr>";
			
			
			echo "</table></span><div class='h10'></div>";
		}
		
	}
?>

<?php
	$sql="select * from answer,user where question_id=$_GET[qid] and answer.user_id=user.user_id";

	$result=ExecuteQuery($sql);
	$no_rows = mysqli_num_rows($result);
	
	if ($no_rows > 0)
	{	
		
		while($row1 = mysqli_fetch_array($result))
		{
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='answer.php?id=$_GET[qid]'>REPLY</a>
</span>";
	
			echo "<table>";
						echo "<tr><td valign='top' width='100px'>
			<img src='$row1[uimg]' alt='' class='uimg'/>
				<br/>
			$row1[fullname]<td valign='top'><b>Replied : $head</b><br/><br/><br/>$row1[answer_detail]</tr>";
			
			echo "</table></span><div class='h10'></div>";	
			
		}
	}
		
?>

<?php 
require("footer.php")?>