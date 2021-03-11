<?php

/**
 * User.php Controller
 * 
*/

include "../model/Database/MySQLConnection.php";
include "../model/UserFunctions/User.php";

class User
{
    public $registerIndex = false;
    public $loginIndex = false;

    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //if(isset($_POST['name']) && !empty($_POST['email']) &&)
            if(isset($_POST['register']))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                    
                $user = new UserFunctions();
        
                $this->registerIndex = $user->addUser($name, $email, md5($password));
            }
            if(isset($_POST['login']))
            {
                $name = addslashes($_POST['name']);
                $password = addslashes($_POST['password']);

                $login = new UserFunctions();

                if(($login->login($name, $password) > 0) == true)
                {
                    switch ($_SESSION['idUser']){
                        case ($_SESSION['idUser'] >= 3):
                            header("Location: ../home.php");
                            break;
                        case ($_SESSION['idUser'] == 1):
                            header("Location: ../dashboard/dashboard.php");
                            break;
                    }
                }else{
                    $this->loginIndex = "<script>alert('Dados Inválidos!')</script>";
                }
            }
        }
    }
}