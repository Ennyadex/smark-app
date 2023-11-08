<?php 
$storekeeper =  $_POST["storekeeper"];
echo "<br>";
echo  '<a href="storekeeper.php">Go back</a>';

$dbconnect = mysqli_connect("localhost","root","","inventory");
// if($dbconnect){
//     echo "database connection successful";
// }

$query  = "INSERT INTO store_keeper (skname) values('$storekeeper')";
mysqli_query($dbconnect,$query);
echo "<br>";
echo "Storekeeper Created successfully";

?>