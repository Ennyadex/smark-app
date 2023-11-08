<?php
$item =  $_POST["item"];
echo "Item name is ".$item;
echo "<br>";

$qty = $_POST["qty"];
echo "quantity for  ".$item ." is ".$qty;
echo "<br>";

$itemprice  =  $_POST["itemprice"];
$c = mysqli_connect("Localhost","root","","inventory");
$sql = "SELECT * FROM price WHERE id =".$itemprice;
$r = mysqli_query($c,$sql);
while($rows = mysqli_fetch_assoc($r)){
   $p = $rows["price"];
}
echo "the price for ".$item." is ".$p;
echo "<br>";

$itemdate =  $_POST["itemdate"];
echo "Date of entry is ".$itemdate;
echo "<br>";


$sk =  $_POST["storekeeper"];
$co = mysqli_connect("Localhost","root","","inventory");
$sql = "SELECT * FROM store_keeper WHERE id =".$sk;
$ro = mysqli_query($co,$sql);
while($rows = mysqli_fetch_assoc($ro)){
   $s = $rows["skname"];
}
echo "the item was recorded by ".$s;
echo "<br>";

//conneccting to mysql database
$connection = mysqli_connect("Localhost","root","","inventory");
// if($connection){
//     echo "connected successfully";
// }else{
//     echo "something went wrong";
// }

$sql = "INSERT INTO item (item_name,QTY,price_id,item_date,sk_id) 
values('$item','$qty','$itemprice','$itemdate','$sk')";
$result = mysqli_query($connection,$sql);
if($result){
    echo " enter successfully";
}else{
    echo "somehng went wrong";
}

echo "<br>";
echo  '<a href="item.php">Go back</a>'; 
?>