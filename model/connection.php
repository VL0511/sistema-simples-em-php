<?php

    //ARQUIVO DE CONFIGURAÇÃO AO BANCO DE DADOS

    /*
    AUTHOR: ZURY

    VARIAVEIS DE CONEXÃO
        HOST: 'localhost'
        USER: 'root'
        PASS: ''
        DBNAME: 'nome_database'
    */ 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $DB_name = "sistema";

    $conn = mysqli_connect($host, $user, $pass, $DB_name); 
    if(!$conn){
        echo "Falha na conexão com banco de dados!";
    }


?>