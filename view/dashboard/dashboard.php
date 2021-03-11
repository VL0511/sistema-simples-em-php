<?php

    require "./checkerAdmin.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration System</title>
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container">
        <section class="row">
            <h1 class="title" style="color:white; margin-top:50px; text-align:center;">DASHBOARD</h1>
            <div class="card col-sm-6" style="width:30rem; margin-top: 50px; color:white; background-color: black; opacity: 0.8;">
                <div class="card-body">
                    <p class="card-text">USUÁRIO CADASTRADOS NO SISTEMA</p>
                    <p class="card-text" style="color:white;"><?php $userProfiles = $users->getAllMembers(); ?></p>
                    <p class="card-text"><?php echo $emailUsers."<br>";  ?></p>
                    <p class="card-text"><?php echo $idUsers."<br>";  ?></p>
                </div>
            </div>
            <div class="card col-sm-6" style="width:30rem; margin-top: 50px; margin-left:50px; color:white; background-color: black; opacity: 0.8;">
                <div class="card-body">
                    <center>
                        <h5 class="title-admin" style="text-align:center;"><?php echo $nameUser; ?></h5>
                        <img src="../bootstrap/img/profile.svg" width="40" height="40" alt="">
                        <p class="card-text">E-mail: <?php echo $emailUser;?></p>
                        <p class="card-text">ID:<?php echo $idUser; ?></p>
                    </center>
                </div>
            </div>
        </section>
    </div>
</body>
</html>