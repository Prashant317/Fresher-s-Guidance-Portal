<?php
error_reporting(1);
	
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect("localhost", "root","","tech_forum");
		$rows = mysqli_query($con,$SQL);
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysqli_connect ("localhost", "root","","tech_forum");
		$rows = mysqli_query($con,$SQL);
		return $rows;
	}
?>