<?php


include './Db.php';

class Show extends Db
{
         public  $data;
        final public function selctAll()
        {
            $pdo=Db::connection(self::DBNAME,self::USERNAME);
            $stmt=$pdo->prepare("select * from user");
            $stmt->execute();
            $this->data=$stmt->fetchAll(PDO::FETCH_OBJ);
            $this->stmt = $stmt;
            return $this;
        } 

    }


$obj=new Show();
$obj->selctAll();
foreach ($obj->data as $data) { ?><br>
<h2>Name: <?php echo $data->name; ?></h2>
<h2>Number:<?php echo $data->number; ?></h2>


<a href="Delete.php?id=<?php echo $data->id; ?>">delete</a>
<a href="Edit.php?id=<?php echo $data->id; ?>">Edit</a>

<?php } ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="Logout.php">log Out</a>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>