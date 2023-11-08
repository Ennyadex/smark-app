<?php
session_start();
$id = $_GET["id"];
//conneccting to mysql database
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "DELETE FROM image_pic WHERE userid = ".$_SESSION["id"];
 mysqli_query($connection,$sql);
 header("Location:image.php");

?>