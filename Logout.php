<?php
session_start();

// //if($_SESSION['login'] = false;
// if($_SESSION['login'] == false){
 
//    echo "You are logged out";
//   header("Location: Register_form.php");
// }
//echo "hii";

//  session_unset();
// }
//var_dump($_SESSION);
//echo "you are logged out";
// session_start();
// session_unset();
// session_destroy();
// header("Location: Register_form.php");
// exit();

//session_start();

$_SESSION['login'] = false;

//session_unset();

//var_dump($_SESSION);
echo "you are logged out";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="Register_form.php">Register/login</a>
</body>
</html>
