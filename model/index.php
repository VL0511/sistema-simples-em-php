<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include "./Database/MySQLConnection.php";
        include "./UserFunctions/User.php";

        $u = new UserFunctions();

        //echo $u->getAllMembers();

        foreach($u->getAllMembers() as $users){
            $users['name']."<br>";
            $users['email']."<br>";
            $users['id']."<br>";
        }
    ?>
</body>
</html>