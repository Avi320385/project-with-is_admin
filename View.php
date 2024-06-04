<?php
 include './Db.php';
session_start();
//$id=$_SESSION['user_id'];





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Product.php">Buy Product</a>
<a href="Logout.php">Log OUt</a>

<a href="Edit_User.php?id=<?php echo $_SESSION['user_id']; ?>">Edit</a>
</body>
</html> 