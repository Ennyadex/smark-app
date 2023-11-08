<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    .bg{
        background-color: aquamarine;
    }
</style>
<body>
    <h1> welcome to Store Keeper Page</h1>
    <br>
    <?php include('navlinks.php'); ?>
    <form method="post" action="submit_storekeeper.php">
        <label>Enter Storekeeper</label>
        <input type="text" name="storekeeper" class="bg"
         placeholder="Enter Storekeeper">
        <button>Submit</button>
    </form>
    <br>

    <ul>
        <li> <a href="storekeeperlist.php">Storekeeper List</a> </li>
      
    </ul>
</body>
</html>