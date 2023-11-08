<?php
session_start();

$r = $_GET['id'];
$connection= mysqli_connect("localhost","root","","inventory");
if ($connection){
    $query=" DELETE FROM store_keeper WHERE id='$r'" ;
    $result = mysqli_query($connection,$query);
    if ($result){
        header("location:storekeeperlist.php");
    }
        
    }else{
        echo mysqli_error ($connection);
    }

    

?>
