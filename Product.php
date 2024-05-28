<?php
session_start();

if($_SESSION['login'] == true){
     header("Location: Product.php");
    
}else{
    echo "please login or register first";
    header("Location: Register_form.php");

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
    <form action="Product_insert.php" method="POST" enctype="multipart/form-data">
    Name: <input type="text" name="name"><br>
    Quantity: <input type="number" name="quantity"><br>
    Price: <input type="number" name="price"><br>
    <input type="file"name="image"><br>

    <button type="submit">Submit</button>

    </form>
    
</body>
</html>

