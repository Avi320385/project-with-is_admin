<?php
include './Db.php';
session_start();
//error_reporting(false);
if (!isset($_SESSION['user_id'])) {
    die("User ID not set in session.");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="Update.php?id=<?php echo $_SESSION['user_id'];; ?>" method="POST" >
        name:<input type="text" name="name" value=""><br>
        number:<input type="number" name="number" value=""><br>
       <button type="submit">Submit</button>
        </form>  
       </body>
</html>