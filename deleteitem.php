<?php 
session_start();
$r = $_GET['id'];
$connection= mysqli_connect("localhost","root","","inventory");
if ($connection){
    $query=" DELETE FROM item WHERE id='$r'" ;
    $result = mysqli_query($connection,$query);
    if ($result){
        header("location:itemlist.php");
    }
        
    }else{
        echo mysqli_error ($connection);
    }

?>