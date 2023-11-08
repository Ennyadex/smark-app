<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List</h1>
    <?php 
    
    $dbconnect = mysqli_connect("localhost","root","","inventory");
    $sql = "SELECT * FROM store_keeper";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);

    echo $numofrows;

             ?>
    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>STOREKEEPER NAME</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            <?php 
           
            if($recordset){
               while($row = mysqli_fetch_assoc($recordset)){
                    echo '
                    <tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["skname"].'</td>
                            <td><a href="sk_delete.php?id='.$row['id'].'">delete</a></td>
                            <td><a href="storekeeperedit.php?storekeeperid='.$rows["id"].'">Edit</a></td>
                    </tr>';
               }
            }
            ?>
      
        </tbody>
    </table>

    
<?php 
echo "<br>";
echo  '<a href="storekeeper.php">Go back</a>'; 
?>
</body>
</html>