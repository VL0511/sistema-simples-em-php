<?php

    //Arquivo de cadastro de usuários no banco de dados

    include_once('connection.php');

    /*
        AUTHOR: ZURY
        CADASTRANDO NOVOS USUÁRIOS NO BANCO DE DADOS

        NOME, EMAIL E SENHA

    */

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Inserir registros no banco de dados

    $sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $save = mysqli_query($conn, $sql);

    $line = mysqli_affected_rows($conn);

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Zury">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snowl</title>
</head>
<body>
    <div class="container">
        <section>
            <h1>Confirmação de cadastro</h1>
            <hr>
            <br><br>
            <?php
                if($line == 1){
                    echo "Cadastro efetuado com sucesso!";
                }else{
                    echo "Cadastro não foi efetuado! Já foi cadastrada essas informações!";
                }
            ?>
        </section>
    </div>
</body>
</html>