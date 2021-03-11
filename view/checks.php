<?php

    require "../model/Database/MySQLConnection.php";

    if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser']))
    {
        require_once "../model/UserFunctions/User.php";

        $u = new UserFunctions();

        $userLoggedIn = $u->profile($_SESSION['idUser']);

        $nameUser = $userLoggedIn['name'];
        $emailUser = $userLoggedIn['email'];
        $idUser = $userLoggedIn['id'];
    
    }else{
        header("Location: ../index.php");
    }
    

?>