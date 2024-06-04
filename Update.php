<?php
 include './Db.php';
session_start();
var_dump($_SESSION['user_id']);
class Update extends Db
{
    public $id ;
    public $number ;
    public $name;

public function updateMethod()
{
      $this->id=  $_SESSION['user_id'];
      $this->number= $_POST['number'];
      $this->name =$_POST["name"];
      $pdo=Db::connection(self::DBNAME,self::USERNAME);
      $stmt = $pdo->prepare("UPDATE user set name='$this->name', number='$this->number' where id ='$this->id'");
      $stmt->execute();
      $this->stmt = $stmt;
    if ($stmt) {
        header("Location: View.php");
    }
        return $this;
  }
}
$obj=new Update;
$obj->updateMethod();
//var_dump($obj->number) ;