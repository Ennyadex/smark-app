<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        background-color: white;
         text-align: center;
         color: black;
        }
        table{
            width: 600px;
            margin-left: 300px;


        }
        table tr th{
            width: 100px;
            height: 30px;
            background-color: white;
            color: blue;
        }
        table tr td{
            width: 100px;
            height: 30px;
            background-color: white;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>List</h1>


    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>ITEMNAME</td>
                <td>ITEM_QUANTITY</td>
                <td>ITEM_PRICE</td>
                <td>DATE</td>
                <td>STORE_KEEPER_ID</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            session_start();
            
           $dbconnect = mysqli_connect("localhost","root","","inventory");
            if($dbconnect){
            $sql = "SELECT * FROM item";
            
          $recordset = mysqli_query($dbconnect,$sql);
          if($recordset -> num_rows > 0){
            $n=1;
          while($row = $recordset->fetch_assoc()){
                    echo '
                    <tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["item_name"].'</td>
                            <td>'.$row["QTY"].'</td>
                            <td>'.$row["price_id"].'</td>
                            <td>'.$row["item_date"].'</td>
                            <td>'.$row["sk_id"].'</td>
                            <td><a href="deleteitem.php?id='.$row['id'].'">delete<a></td>
                            
                    </tr>';

                    $n++;
               }
            }
        }else{
            echo mysqli_error ($dbconnect);
        }

            ?>
      
        </tbody>
    </table>

    
<?php 
echo "<br>";
echo  '<a href="item.php">Go back</a>'; 
?>
</body>
</html>