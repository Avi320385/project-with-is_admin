<?php
//session_start();
class Db{
    public $stmt;
    const DBNAME="project1";
    const USERNAME="root";

   final public function connection($Db_var,$Db_user,$password = null)
    {
        try{
            return new PDO("mysql:host=127.0.0.1;dbname={$Db_var};",$Db_user, $password);
        }catch(Exception $e){
            var_dump($e->getMessage());
        }
    }
}

class InsertData extends Db
{
    public $name;
    public $email;
    public  $number;
    public  $password;
    public $is_admin;
    public $image;
    public  $imagename;
    public $imageArray;
    public $imageExt;
    public $imgTempName;


     public function insert()
    {
         $this->name = $_POST["name"];
         $this->email = $_POST["email"];
         $this->number = $_POST["number"];
         $this->password = $_POST["password"];
         $this->is_admin = $_POST["is_admin"];
         $this->image = $_FILES['image']['name'];
          $this->imagename = time() . '_' . rand(100, 1000) . '_' . rand(100, 1000) . '_' .$this->image;
          $this->imageArray = explode('.', $this->image);
          $this->imageExt = end($this->imageArray);
          $this->imgTempName = $_FILES['image']['tmp_name'];
      
     
             if (move_uploaded_file($this->imgTempName, 'image/' . $this->imagename)) {
             
            $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt=$pdo->prepare("insert into user(name,email,number,password,is_admin,image) values ('$this->name','$this->email','$this->number',
        '$this->password','$this->is_admin','$this->imagename' )");
        $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->execute();
        if($stmt){
            header("Location: login.php");
        }
   

}
    }
}
    


  