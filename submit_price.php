<?php 
$price =  $_POST["price"];
echo "<br>";
echo  '<a href="price.php">Go back</a>';

$dbconnect = mysqli_connect("localhost","root","","inventory");
// if($dbconnect){
//     echo "database connection successful";
// }

$query  = "INSERT INTO price (price) values('$price')";
mysqli_query($dbconnect,$query);
echo "<br>";
echo "price stored successfully";


?>