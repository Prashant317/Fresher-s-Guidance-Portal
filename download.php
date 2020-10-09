<!doctype html>
<html>
	<head>
		<title>Download your paper</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div align="center">
			<table class="table table-hover table-striped " border="1">
				<tr>
					<th>COURSE CODE</th>
					<th>COURE NAME</th>
					<th>PAPER</th>
					<th>DOWNLOAD THIS PAPER</th>
				</tr>
		</div>
	</body>
</html>

<?php 

	$conn = mysqli_connect("localhost","root","","tech_forum");
	$coursecode = $_POST['ccode'];
	if($conn)
	{
		$query = "select * from questionpapers where `CCode`='$coursecode'";
		$result = mysqli_query($conn,$query);
		if($result)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>
					<td>".$row['CCode']."</td>
					<td>".$row['CName']."</td>
					<td>".$row['FName']."</td>
					<td>"."<a href='res/".$row['FName']."'>Download</a>"."</td>
				</tr>";
			}
		}
		else
		{
			echo "$query";
		}
	}

?>