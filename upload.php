
<?php
//file_uploads = On
$conn = mysqli_connect("localhost","root","","tech_forum");
$target_dir = "D:/wamp64/www/Freshers Guidance Portal/College_students_guidance_system-master/res/";
$target_file = $target_dir . basename($_FILES["qpfile"]["name"]);
$qp = $_FILES['qpfile']['name'];
$coursecode = $_POST['ccode'];
$coursename = $_POST['sname'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["qpfile"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx"
 ) {
    echo "Sorry, only PDF and word files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $query = "insert into questionpapers (CCode,CName,FName) values('$coursecode','$coursename','$qp')";
    $result = mysqli_query($conn,$query);
    if($result)
    {
       echo "";
    }
    else
    {
        echo "NOt stored";
    }
    if (move_uploaded_file($_FILES["qpfile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["qpfile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>