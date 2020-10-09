<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect ("localhost", "root","","tech_forum");
		//mysql_select_db ("tech_forum",$con);
		
		$row = mysqli_query($con,$SQL);
		
		return $row;
	}
	
?>