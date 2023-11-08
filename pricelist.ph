<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style
</head>
<body>
    <h1>List</h1>
    <?php 
    
    $dbconnect = mysqli_connect("localhost","root","","inventory");
    $sql = "SELECT * FROM price";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);

    echo $numofrows;

             ?>
    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>PRICE</td>
            </tr>
        </thead>
        <tbody>
            <?php 
           
            if($recordset){
               while($rows = mysqli_fetch_assoc($recordset)){
                    echo '
                    <tr>
                            <td>'.$rows["id"].'</td>
                            <td>'.$rows["price"].'</td>
                    </tr>';
               }
            }
            ?>
      
        </tbody>
    </table>

    
<?php 
echo "<br>";
echo  '<a href="price.php">Go back</a>'; 
?>
</body>
</html>