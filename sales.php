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
    <table width="900px" style="margin: auto;">
        <thead>
            <tr style="background-color: grey; color:white;">
                <td>
                    SN
                </td>
                <td>
                    ITEM
                </td>
                <td>
                   QUANTITY
                </td>
                <td>
                   PRICE
                </td>
                <td>
                    ACTION
                </td>
            </tr>
        </thead>
        <tbody>
        <?php 
        $count =1;
        $msg = "";
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","inventory");
            //preparing sql query to retrieve data from database
            $sql = "SELECT item.id as itemid,price.id as priceid,item_name,QTY,price_id,price	
             FROM item inner join price ON item.price_id = price.id";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               if($rows["QTY"] == 0){
                    $msg = "No item in the stock";
               }else{
                $msg = $rows["QTY"];
               }
               
              echo' 
              <tr>

                    <td>'.$count.'</td>
                    <td>'.$rows["item_name"].'</td>
                    <td>'.$msg.'</td>
                    <td>'.$rows["price"].'</td>
                    <td>
                    <a href="sellitem.php?itemid='.$rows["itemid"].'">Sell Now</a>
                    <a href="updateitemqty.php?itemid='.$rows["itemid"].'&item='.$rows["item_name"].'">Update Item Quantity</a>
                    </td>
            </tr>
                ';
                $count++;
            }
        ?> 
        </tbody>
    </table>
</body>
</html>