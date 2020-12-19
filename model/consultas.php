<?php
    //ARQUIVO DE CONSULTA DE DADOS
    include_once("connection.php");

    /*
        AUTHOR: ZURY
        CAMPO DE FILTRAGEM DE BUSCAS.

        A FILTRAGEM É UTILIZADA POR NOMES.

        DADOS QUE SÃO APRESENTADOS: NOME, EMAIL E SENHA.
    
    */

    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    $sql = "SELECT * FROM users WHERE nome like'%$filtro%'";
    $consultar = mysqli_query($conn, $sql);
    $registros = mysqli_num_rows($consultar);

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Zury">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Snowl</title>
    <style>
        body{
            background: url("../view/bootstrap/img/bg.png") no-repeat center center fixed;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            background-size: cover;
        }

        article{
            width:90%;
            margin-left:5px;
            border:2px solid black;
            border-radius:4px;
            box-sizing:border-box;
            padding:10px;
            background:white;
            margin-bottom:5px;
            font-family: 'Roboto';
        }
        .consultas{
            margin-top:40px;
            background:white;
            border:2px solid black;
            border-radius:4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="consultas">
            <h1 style="color:;">Consultas de dados</h1>
            <hr>
            <br>
            <form action="" method="get" name="form_consulta">
                Filtrar por nome:
                <input type="text" name="filtro" class="campo" require autofocus>
                <input type="submit" value="Filtrar" class="btn btn-primary">
            </form>

            <?php
                print "Total de registros: $registros";

                print "<br><br>";
                #$exR <- Exibir Registros
                while($exR = mysqli_fetch_array($consultar)){
                    $id = $exR[0];
                    $nome = $exR[1];
                    $email = $exR[2];
                    $senha = $exR[3];
                    
                    print "<article>";
                    print "$id<br>";
                    print "$nome<br>";
                    print "$email<br>";
                    print "$senha<br>";
                    print "</article>";
                }
            ?>
        </section>
    </div>
</body>
</html>