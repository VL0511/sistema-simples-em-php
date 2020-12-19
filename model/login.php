<?php

    //Arquivo de login
    include_once("connection.php");
    /*
    AUTHOR: ZURY
        CONSULTAR DADOS DO USUÁRIO E LOGAR NO SISTEMA.
        EMAIL E SENHA.
    */ 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT sistemas FROM users WHERE email = '{$email}' adn senha = md5('{$senha}')";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['email'] = $email;
        header('Location: ../view/painel.html');
        exit();
    } else{
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../view/index.html');
        exit();
    }

?>