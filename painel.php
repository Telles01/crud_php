<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>
<body>
    
<div class="container">
    <h3>Painel do Sistema</h3>
    
    <p>Seja bem vindo(a): <?php echo $_SESSION["nome"];?> </p>

    <h4>Menu</h4>
        
    <a href="cadastrar-cliente.php" class="btn">Cadastrar Cliente</a>
    <a href="consultar-cliente.php" class="btn">Consultar Clientes</a>
</div>

</body>
</html>