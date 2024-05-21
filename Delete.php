<?php

include './Db.php';

error_reporting(false);


class Delet extends Db 
{
     public $id;
    public function delete()
{
    $this->id=$_GET['id'];
    $pdo=Db::connection(self::DBNAME,self::USERNAME);
    $stmt = $pdo->prepare("DELETE  from user where id =$this->id");
    $stmt->execute();
    if ($stmt) {
    header("Location: Admin.php");
}
}
}
$obj=new Delet();
$obj->delete();