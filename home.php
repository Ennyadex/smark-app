<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
.img{
    border-top-left-radius: 30px;
    border-top-right-radius:30px ;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius:30px ;
}
</style>
<body >
    <h1> welcome to smark</h1>
    <br>
    <?php include('navlinks.php') ?>

    <p> Welcome <?php echo $_SESSION["username"]; ?></p>
    <?php
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "SELECT * FROM image_pic WHERE userid =".$_SESSION["user_id"];
$result = mysqli_query($connection, $sql);
while($rows = mysqli_fetch_assoc($result)){
    $img = $rows["image_name"];
}
    ?>
<p> <img src="<?php echo $img; ?>" class="img" height="100px" 
width="100px"/> </p>
    <br>
</body>
</html>