<?php
$id = $_POST["itemid"];
$qty = $_POST["newitem"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "UPDATE item SET QTY = $qty WHERE id =".$id;
mysqli_query($connection,$sql);
echo "item updated  successfully";

echo "<br>";
echo  '<a href="item.php">Go back</a>'; 
?>