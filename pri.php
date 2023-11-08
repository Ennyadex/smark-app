<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> welcome to price setting Page</h1>
    <br>
    <?php include('navlinks.php'); ?>

    <form method="post" action="submit_price.php">
        <label>Add Price</label>
        <input type="number" name="price" placeholder="Enter Item Price">
        <button>Add Price</button>
        
    <br>
    
    <ul>
        <li> <a href="pricelist.php">price List</a> </li>
      
    </ul>
    </form>
</body>
</html>