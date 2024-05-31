<?php
include './Db.php';
session_start();



class CartList extends Db
{
    public $product_id;
    public  $user_id;
    public $data;
    public $id;
     public function cartInsert()
    {   $this->id = $_GET["id"]; 
        $this->product_id = $_GET["product_id"]; 
        $this->user_id = $_SESSION["user_id"];
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
        //$stmt=$pdo->prepare("select * from  cart  where user_id='$this->user_id' ");
        $stmt=$pdo->prepare("
            SELECT cart.id, product.name, product.image
            FROM cart
            INNER JOIN product ON cart.product_id=product.id where cart.user_id='$this->user_id'");
        $stmt->execute();
        $this->data=$stmt->fetchAll(PDO::FETCH_OBJ);
        $this->stmt = $stmt;
            
           // return $this;
    }
}

$objlist=new CartList();
$objlist->cartInsert();
//var_dump($objlist->data[0]["id"]);
foreach ($objlist->data as $data) { ?><br>

    <h2>Product Name: <?php echo $data->name; ?></h2>
    
    <img height="200px" width="200px" src="product_image/<?php echo $data->image; ?>" alt=""><br>
    <a href="Cart_Delete.php?id=<?php echo $data->id;?>">Delete</a>


<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Logout.php">Log Out</a>
   
</body>
</html>