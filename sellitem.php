<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> welcome to Sales</h1>
    <br>
    <?php include('navlinks.php'); ?>
    <form action="submit_sales.php" method="POST">
    <table width="1000px" style="margin: auto;">
        <thead>
            <tr style="background-color: grey; color:white;">
                <td>
                    SN
                </td>
                <td>
                    Select StoreKeeper
                </td>
                <td>
                    ITEM
                </td>
                <td>
                  ITEM QUANTITY
                </td>
                <td>
                   PRICE
                </td>
                <td>
                    QUANTITY TO SELL
                </td>
                <td>
                    ACTION
                </td>
               
            </tr>
        </thead>
        <tbody>
       
        <?php 
        
        $count =1;
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","inventory");
            //preparing sql query to retrieve data from database
            $sql = "SELECT item.id as itemid,price.id as priceid,item_name,QTY,price_id,price	
             FROM item inner join price ON item.price_id = price.id WHERE item.id=".$_GET["itemid"];
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               
               
              echo' 
              <tr>
                    <td>'.$count.' <input type="hidden" name="itemid" value="'.$rows["itemid"].'"></td>
                    <td><select name="sk_id">';
                ?>
                <?php
                //connecting to mysql server
                $db = mysqli_connect("localhost","root","","inventory");
                //preparing sql query to retrieve data from database
                $s = "SELECT * FROM store_keeper";
                $ra = mysqli_query($db,$s);
                while($row = mysqli_fetch_assoc($ra)){
                    echo '<option value='.$row["id"].'>'.$row["skname"].'</option>';
                }
               
                    ?>
               <?php
                echo '</select></td>
                    <td><input type="text" name="itemname" value="'.$rows["item_name"].'" readonly></td>
                    <td><input type="number" name="itemqty" value="'.$rows["QTY"].'" readonly></td>
                    <td><input type="number" name="itemprice" value="'.$rows["price"].'" readonly></td>
                    <td><input type="number" name="sellqty" placeholder="Enter quanity"></td>
                    <td><button> Sell</button></td>
            </tr>
                ';
                $count++;
            }
        ?> 
        </tbody>
    </table>
    </form>
    <a href="sales.php">back</a>
</body>
</html>