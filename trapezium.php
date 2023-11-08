<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>a</label>
        <input type="number" name="a" id="a" placeholder="value" required>
        <br>
        <label>b</label>
        <input type="number" name="b" id="b" placeholder="value" required>
        <br>
        <label>h</label>
        <input type="number" name="h" id="h" placeholder="value" required>
        <br>
        <button>calculate</button>
    </form>
</body>
</html>

<?php
function areaoftrapezium($a,$b,$h){
    echo (($a + $b)/2)* $h;
}
$a = $_GET["a"];
$b = $_GET["b"];
$h = $_GET["h"];
areaoftrapezium($a,$b,$h);
?>