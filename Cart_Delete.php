<?php


include './Db.php';



class Delete extends Db 
{
    public $id;
  
    public function deletes()
{ 
     $this->id = $_GET["id"]; 
    //var_dump($s);
    $pdo=Db::connection(self::DBNAME,self::USERNAME);
    $stmt = $pdo->prepare("DELETE  from cart where id ='$this->id'");
    $stmt->execute();
   // var_dump($s);

    if ($stmt) {
    header("Location: Cart_List.php");
}else {

    echo "something wrong";
}
}
}
$obj=new Delete();
$obj->deletes();