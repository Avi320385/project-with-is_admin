<?php
 include './Db.php';
class ProductView extends Db
{
         public  $data;
        final public function selctAll()
        {
            $pdo=Db::connection(self::DBNAME,self::USERNAME);
            $stmt=$pdo->prepare("select * from product");
            $stmt->execute();
            $this->data=$stmt->fetchAll(PDO::FETCH_OBJ);
            $this->stmt = $stmt;
            return $this;
        } 

    }
    $obj=new ProductView();
$obj->selctAll();
foreach ($obj->data as $data) { ?><br>
<img src="product_image/<?php echo $data->image; ?>" alt=""><br>
<h2>Product Name: <?php echo $data->name; ?></h2>
<h2>Price: <?php echo $data->price; ?></h2>

<a href="Login.php ?>">log In</a>
<a href="Register_form.php ?>">Register</a>


<?php } ?>

