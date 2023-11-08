<?php
session_start();
$username = $_POST["username"];
echo "<br>";

$pass_word = $_POST["pass_word"];
echo "<br>";

$connection = mysqli_connect("localhost","root","","inventory");
if($connection){
$query = "SELECT *FROM user WHERE username = '$username' AND pass_word = '$pass_word'";
$result = mysqli_query($connection,$query);
$num = mysqli_num_rows($result);

if($num == 1){
    while($rows = mysqli_fetch_assoc($result)){
         $username = $rows["username"];
         $id = $rows["id"];
         $_SESSION["username"] = $username;
         $_SESSION["user_id"] = $userid;
         $status["status"] = $status;
         header("Location:home.php");
    }
}else{
    echo "please sign up";
    echo "<br>";
    echo '<a href="home.php"> Go back</a>';
}
}

?>