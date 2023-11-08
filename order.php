<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> Make your Order here</h1>
    <br>
    <?php include('navlinks.php'); ?>

    <form method="post" action="addprice.php">
        <label>Select Item</label>
      <select>
      <?php 
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","inventory");
            //preparing sql query to retrieve data from database
            $sql = "SELECT item.id as itemid,price.id as priceid,item_name,qty,price_id,price	
            FROM item inner join price ON item.price_id = price.id";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r))
            {
                echo '<option value='.$rows["id"].'>'.$rows["item_name"].'   $'.$rows["price"].' ('.$rows["QTY"].') '.'</option>';
            }
        ?>
      </select>
      <br>
      <input type="number" name="QTY" placeholder="Enter item qauntity">
        <button>Make Order</button>
    </form>

    
</body>
</html>