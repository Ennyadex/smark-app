<?php
session_start();
$userid = $_SESSION["id"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["picture"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

if ($_FILES["picture"]["size"] > 1000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["picture"]["name"])). " has been uploaded.";
   echo "<br>";
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "INSERT INTO image_pic (userid,image_name) 
values('$userid','$target_file')";
$result = mysqli_query($connection,$sql);
    echo $target_file;  
} else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>