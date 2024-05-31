<?php

include './Db.php';

session_start();

class Login extends Db
{
    public $email;
    public $password ;
    public $data;

    public function login()
    {
        $this->email=$_POST["email"];
        $this->password = $_POST['password'];
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt = $pdo->prepare("select * from  user  where email='$this->email' && password='$this->password'");
        $stmt->execute();
        $this->data=$stmt->fetch(PDO::FETCH_ASSOC);

        //var_dump($stmt->rowCount() > 0);
        // if ($stmt->rowCount() > 0) {
        //     $_SESSION['login'] = true;
        //     header("Location: Log_check.php");
        //     echo "you are logged in";
            
        // }else{
        //     echo "credentials didnt match";
        //    // header("Location: login_form.php");

        // }
    }
}



    $obj = new Login();
    $obj->login();
    $_SESSION['user_id']=($obj->data['id']);
    if ($obj->data) {
        $_SESSION['login'] = true;
        if ($obj->data['is_admin'] == 1) {
            header("Location: Admin.php");
            exit;
        } else {
            header("Location: View.php");
            exit;
        }
    } else {
        echo "Credentials didn't match.";
        header("Location:login_form.php");
        exit;
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
    <a href="Logout.php">Log OUt</a>
</body>
</html>