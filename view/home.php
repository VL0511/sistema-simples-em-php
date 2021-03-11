<?php
    include "./checks.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration System</title>
    <link rel="stylesheet" href="./bootstrap/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <center>
            <div class="card" style="width:20rem; margin-top:150px; background-color:black; opacity:0.8; color:white;">
                <div class="card-body">
                    <h5 class="card-tile">PROFILE <br><img src="./bootstrap/img/profile.svg" alt="profile"
                            style="width:40px; height:40px; margin-top:20px;"></h5>
                    <p class="card-text">Your name: <?php echo $nameUser; ?></p>
                    <p class="card-text">Your e-mail:<?php echo $emailUser; ?></p>
                    <p class="card-text">Your id:<?php echo $idUser; ?></p>
                    <a class="btn btn-primary" href="./logout.php" name="sair">SAIR</a>
                </div>
            </div>
        </center>
    </div>
</body>

</html>