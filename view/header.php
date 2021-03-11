<?php
    include "../../controller/User.php";
    include "../../model/UserFunctions/User.php";
    include "../../model/Database/MySQLConnection.php";

    $u = new User();

    $u->index();

    if($u->registerIndex) echo $u->registerIndex;
    if($u->loginIndex) echo $u->loginIndex;
?>
