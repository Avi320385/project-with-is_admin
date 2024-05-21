<?php
session_start();

if($_SESSION['login'] == true){
     header("Location: login.php");
    echo "the user is logged in";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php"  method="POST">
    Email:<input type="email" name="email">
        <br>
        Password:<input type="password" name="password">
        <br>
        <button type="submit">submit</button>
        <br>
        <a href="Register_form.php">Register</a>
    </form>
</body>
</html>