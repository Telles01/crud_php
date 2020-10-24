<?php 
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar do Clientes e funcionarios</title>

    <link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>
<body>
    
    <div class="container">

        <h3>Cadastro - Clientes</h3>
        
        <form action="gravar-cliente.php" method="POST">

            <!-- Nome:<br>
            <input type="text" name="nome" required> -->

            <div class="input-field">
                <input type="text" name="nome" required id="nome">
                <label for="nome">Nome</label>
            </div>
            
            <div class="input-field">
                <input type="email" name="email" required id="email">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field">
                <input type="text" maxlength="11" name="cpf" required id="cpf">
                <label for="cpf">Cpf</label>
            </div>

            <p>
                <label>
                    <input type="radio" name="sexo" required value="M">
                    <span>Masculino</span>
                </label>
            </p>

            <p>
                <label>
                    <input type="radio" name="sexo" required value="F">
                    <span>Feminino</span>
                </label>
            </p>

            <input type="submit" value="Cadastrar" class="btn">

        </form>

    </div>
    <script src="materialize/js/materialize.min.js"></script>
</body>
</html>