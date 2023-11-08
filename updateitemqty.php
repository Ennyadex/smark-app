<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$id = $_GET["itemid"];
$item = $_GET["item"];


echo  '<a href="sales.php">Go back</a>'; 
?>
<form method="post" action="submit_updateitem.php">
     <input type="hidden" name="itemid" value="<?php echo $id  ?>">
    <input type="number" name="newitem" value="<?php echo $item ?>" placeholder="Enter Quantity"> for <?php echo $item;?>
    <button>Update Item Quantity</button>
</form>
</body>
</html>