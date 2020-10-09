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
  <div class="column">
    <form action="upload.php" method="post" enctype="multipart/form-data">
<br><br>
Course code:<input type="text" placeholder="CSE3001" name="ccode"><br><br>
Course name:<input type="text" placeholder="IWP" name="sname"><br><br>
    Select  File to Upload:
    <input type="file" name="qpfile" id="qpfile"><br><br>
    <input type="submit" name="submit" value="Upload">
    </form>

  </div>
  <div class="column">
    <form action="download.php" method="post" enctype="multipart/form-data">
<br><br>
Course code:<input type="text" placeholder="CSE3001" name="ccode"><br><br>
    <input type="submit" name="submit" value="Search Question Paper">
    </form>

  </div>
</div>

</body>
</html>

s