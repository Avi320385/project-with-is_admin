<?php
include './Db.php';
session_start();

class ProductInsert extends Db
{
    public $name;
    public $quantity;
    public $userId;
    public $image;
    public $price;
    public  $imagename;
    public $imageArray;
    public $imageExt;
    public $imgTempName;
   // public $userId;


     public function insert()
    {
         $this->name = $_POST["name"];
         $this->quantity = $_POST["quantity"];
        $this->userId = $_SESSION['user_id'];
      
        $this->image = $_FILES['image']['name'];
        $this->imagename = time() . '_' . rand(100, 1000) . '_' . rand(100, 1000) . '_' .$this->image;
        $this->imageArray = explode('.', $this->image);
        $this->imageExt = end($this->imageArray);
        $this->imgTempName = $_FILES['image']['tmp_name'];
        
        $this->price = $_POST['price'];
      
     
        if (move_uploaded_file($this->imgTempName, 'product_image/' . $this->imagename)){
             
            $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt=$pdo->prepare("insert into product(name,quantity,user_id,image,price) values('$this->name','$this->quantity',
         '$this->userId','$this->imagename','$this->price')");
        //$stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->execute();
       
   
        }
}
    }

    $productObj=new ProductInsert();
    $productObj-> insert();
