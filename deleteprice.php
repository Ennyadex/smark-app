<?php

$id = $_GET["priceid"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "DELETE FROM price WHERE id=".$id;
mysqli_query($connection,$sql);
echo "price deleted successfully";

echo "<br>";
echo  '<a href="price.php">Go back</a>'; 
?>