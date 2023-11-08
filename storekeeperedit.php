<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editstorekeeper.php" method="post">
        <input type="hidden"  name="skid" value="<?php echo $_GET["storekeeperid"]; ?>" readonly>
        <input type="text" name="newstorekeeper" placeholder="Edit storekeeper">
        <button>Edit</button>
    </form>
</body>
</html>