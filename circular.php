<?php require("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Circulars</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 15px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>


<div class="row">
	<h2>All Circulars - </h2>
	<?php 

		$conn=mysqli_connect ("localhost", "root","","tech_forum");
		if($conn)
		{
			$query = "select * from circulars";
			$result = mysqli_query($conn,$query);
			if($result)
			{
				if(mysqli_num_rows($result)>0)
				{
					$i = 1;
					while($row = mysqli_fetch_array($result))
					{
						?>
						<div>
							<h4><a href="<?php echo($row[2]) ?>" target="_blank"><?php echo $i.". ".$row[1]. " - ".$row[3]; ?></a></h4>
						</div>

						<?php
						$i++;
					}
				}
				else
				{
					echo "<h2>No circualrs to display</h2>";
				}
			}
			else
			{
				echo mysqli_error($conn);
			}
		}
		else
		{
			echo mysqli_error($conn);
			?>
				<script type="text/javascript">
					alert("Database Connection problem");
				</script>
			<?php
		}

	?>
</div>

</body>
</html>