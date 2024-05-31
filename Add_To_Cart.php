<?php
include './Db.php';
session_start();


// echo $_GET["product_id"];
var_dump($_SESSION['user_id']);

class Cart extends Db
{
    public $product_id;
    public  $user_id;
    public $data;
     public function cartInsert()
    {
         $this->product_id = $_GET["product_id"];
        $this->user_id = $_SESSION["user_id"];
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt=$pdo->prepare("INSERT INTO cart(product_id,user_id) VALUES ('$this->product_id','$this->user_id')");
        $this->data=$stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt->execute();
           
    }
}

$objCart=new Cart();
$objCart->cartInsert();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Cart_List.php?product_id=<?php echo $objCart->product_id;?>">Cart List</a>
</body>
</html>

