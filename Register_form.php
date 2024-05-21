<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
     NAME:<input type="text" name="name"><br>
     Email:<input type="email" name="email"><br>
     Phone Number:<input type="number" name="number"><br>
     Password:<input type="password" name="password"><br>
     <select name="is_admin" id="">
        <option value="1">admin</option>
        <option value="0">user</option>
     </select><br>
     <input type="file"name="image"><br>
     <button type="submit">Submit</button>

     <a href="Login_form.php">Login</a>
    </form>
</body>
</html>
<?php
include './Db.php';
//error_reporting(false);
session_start();
$obj=new InsertData();
$obj->insert()
  
// if($obj)
// {
//     header("Location: login.php");
// }
// if($_SESSION['login'] == true){
// if ($obj->is_admin==1) {
//     header("Location: Admin.php");
//     exit;
// }elseif($obj->is_admin==0){
//     header("Location: View.php");
//     exit;
// }
// }
// if ( $_SESSION['login'] === true) {
//     if ($obj->is_admin == 1) {
//         header("Location: Admin.php");
//         exit(); 
//     } elseif ($obj->is_admin == 0) {
//         header("Location: View.php");
//         exit();
//     }
// } else {
   
//     header("Location: login.php");
//     exit();
// }
?>