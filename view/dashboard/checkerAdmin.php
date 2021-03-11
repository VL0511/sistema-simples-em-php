<?php

    require "../../model/Database/MySQLConnection.php";

    if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser']))
    {
        require_once "../../model/UserFunctions/User.php";

        $u = new UserFunctions();

        $userLoggedIn = $u->profile($_SESSION['idUser']);

        $nameUser = $userLoggedIn['name'];
        $emailUser = $userLoggedIn['email'];
        $idUser = $userLoggedIn['id'];

        require_once "../../model/UserFunctions/User.php";

        $users = new UserFunctions();

        //$userProfiles = $users->getAllMembers();

        /*
        foreach($userProfiles as $users){
            $users['name']."<br>";
            $users['email']."<br>";
            $users['id']."<br>";
        }

        $nameUsers = $userProfiles['name'];
        $emailUsers = $userProfiles['email'];
        $idUsers = $userProfiles['id'];
    */
    }else{
        header("Location: ../../index.php");
    }
    

?>