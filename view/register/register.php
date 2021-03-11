<?php
    include "../header.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

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
        <div class="register">
            <center>
                <form method="post" name="form_register" class="form_register" style="color: black;">
                    <h5 class="title">REGISTER</h5>
                    <input type="text" name="name" id="name" placeholder="Username">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                    <input type="password" name="password" id="password" placeholder="Create a Password">
                    <input type="password" name="passwd" id="passwd" placeholder="Re-enter your password">
                    <input type="submit" value="REGISTER" name="register" class="btn btn-primary"><br><br>
                    <a href="../login/login.php" class="login">LOGIN</a>
                </form>
            </center>
        </div>
    </div>
</body>

</html>