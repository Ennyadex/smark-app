<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> welcome to price setting Page</h1>
    <br>
    <?php include('navlinks.php'); ?>

    <form method="post" action="submit_price.php">
        <label>Add Price</label>
        <input type="number" name="price" placeholder="Enter Item Price">
        <button>Add Price</button>
    </form>

    <table width="400px" style="margin: auto;">
        <thead>
            <tr style="background-color: grey; color:white;">
                <td>
                    SN
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
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","inventory");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM price";
           
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               
               
              echo' 
              <tr>
                    <td>'.$count.'</td>
                    <td>'.$rows["price"].'</td>
                    <td><a href="deleteprice.php?priceid='.$rows["id"].'">Delete |
                    <a href="updateprice.php?priceid='.$rows["id"].'&price='.$rows["price"].' ">Update
                    </a></td>
            </tr>
                ';
                $count++;
            }
        ?>
        </tbody>
    </table>
</body>
</html>