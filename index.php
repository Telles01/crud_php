<?php
    session_start();

    if(isset($_SESSION["nome"])){
        header("location:painel.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="materialize/css/materialize.min.css">

    <style>

        .container{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login{
            width: 400px; 
            height: 330px;           
            background-color: #eeeeee;
        }
             
    </style>

</head>
<body>
    
    <div class="container">

        <div class="login card-panel">

            <h3>Área Restrita</h3>
            <h4>Painel</h4>
            <!-- form login -->

            <form action="verificar-login.php" method="post">

                <input type="text" name="login" placeholder="Digite seu login" required>
                <input type="password" name="senha" placeholder="Digite sua senha" required>

                <input type="submit" value="Entrar" class="btn">

            </form>

            <p>
                <?php 
                    if(isset($_GET["msg"])){
                        echo $_GET["msg"];
                    }
                ?>
            </p>

        </div>
        
    </div>

</body>
</html>