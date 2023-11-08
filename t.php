

<?php
function areaoftrapezium($a,$b,$h){
$result = (($a + $b)/2)* $h;
echo $result;
if($result){
$a = $_GET["a"];
$b = $_GET["b"];
$h = $_GET["h"];
areaoftrapezium($a,$b,$h);
}
}
?>