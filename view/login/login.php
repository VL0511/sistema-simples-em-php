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
        <div class="login">
            <center>
                <form method="post" name="form_login" class="form_login">
                    <h5 class="title">LOGIN</h5>
                    <input type="text" name="name" id="name" placeholder="Username">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="submit" value="ACCESS" class="btn btn-primary" name="login"><br><br>
                    <a href="../register/register.php" class="register">REGISTER</a>
                </form>
            </center>
        </div>
    </div>
</body>

</html>