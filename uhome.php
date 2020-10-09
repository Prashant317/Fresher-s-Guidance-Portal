<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

<style>
.h{
	color:red;
	text-align:center;
}
</style>

<h4><a href="que.php">My Questions</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ans.php">My Answered Questions </a></h4>
<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,20";
	
	$result=ExecuteQuery($sql);
	
?>
<h1 class="h">Questions Asked By Students</h1>
<?php
	while($row = mysqli_fetch_array($result))
	{
		   
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";
			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/><br/>
			$row[datetime]<br/><br/>
			</td></tr>";
			
			
			echo "</table></span><div class='h10'></div>";
		}
	
?>

<?php require("footer.php");?>