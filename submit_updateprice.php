<?php
$id = $_POST["priceid"];
$nprice = $_POST["newprice"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "UPDATE price SET price = $nprice WHERE id =".$id;
mysqli_query($connection,$sql);
echo "price updated  successfully";

echo "<br>";
echo  '<a href="price.php">Go back</a>'; 
?>