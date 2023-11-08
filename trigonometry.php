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
        <button>calculate</button>
    </form>
</body>
</html>

<?php
function trigonometry($a){

    echo (sin ($a));
    echo "<br>";
    echo (cos ($a));
    echo "<br>";
    echo (tan ($a));

$a = $_GET["a"];
}
trigonometry($a);
?>
