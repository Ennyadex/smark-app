
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$id = $_GET["priceid"];
$price = $_GET["price"];
$connection = mysqli_connect("Localhost","root","","inventory");

echo  '<a href="price.php">Go back</a>'; 
?>
<form method="post" action="submit_updateprice.php">
     <input type="hidden" name="priceid" value="<?php echo $id  ?>">
    <input type="number" name="newprice" value="<?php echo $price ?>" placeholder="Enter New Price">
    <button>Update Price</button>
</form>
</body>
</html>
