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
<body>
    <h1> welcome to Item Page</h1>
    <br>
    <?php include('navlinks.php'); ?>
    <form method="post" action="submit_item.php">
        <label>Item Name</label>
        <input type="text" name="item">

        <label>Item quantity</label>
        <input type="number" name="qty">

        <label>Select Item price</label>
        <select name="itemprice">
        <?php 
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","inventory");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM price";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
                echo '<option value='.$rows["id"].'>'.$rows["price"].'</option>';
            }
        ?>
           
        </select>

        <label>date of entry</label>
        <input type="date" name="itemdate">

        <label>Select Storekeeper Name</label>
        <select name="storekeeper">
        <?php 
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","inventory");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM store_keeper";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
                echo '<option value='.$rows["id"].'>'.$rows["name"].'</option>';
            }
        ?>
           
        </select>
    <button> Add Item </button>
    <br>
   
    <ul>
        <li> <a href="itemlist.php">item List</a> </li>
      
    </ul>
    </form>
</body>
</html>