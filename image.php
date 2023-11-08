<?php session_start();
if(!isset($_SESSION["username"])){
header("Location:error.php");
}
?>
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
<body>
    <h1> welcome <?= $_SESSION["username"]?></h1>
    <br>
    <?php include('navlinks.php'); ?>
    <form action="upload.php" method="post" action="submit_item.php" enctype="multipart/form-data">
        <label>Item Name</label>
        <input type="file" name="picture">
    <button name="submit"> Upload Image</button>
    </form>
    <table border="1" width="200px">
        <thead>
            <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $connection = mysqli_connect("Localhost","root","","inventory");
            $sql = "SELECT * FROM image_pic WHERE userid = ".$_SESSION["user_id"];
            $result = mysqli_query($connection,$sql);
            while($rows = mysqli_fetch_assoc($result)){
                $img = $rows["image_name"];
                $name =  $rows["image_name"];
                $h =  $rows["h"];
                $w =  $rows["w"];
                echo '<tr>
            <td><img src="'.$img.'" class="img" height="'.$h.'px" 
            width="'.$w.'px"/></td>
            <td>'.$name.'</td>
            <td><a href="deleteimage.php?id='.$rows["userid"].'">remove</a>
            <a href="imagesize.php?id='.$rows["userid"].'">adjust</a>
            </td>
            </tr>';
               
            }
            ?>
            
        </tbody>
    </table>
</body>
</html>