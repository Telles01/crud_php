<?php 
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar - Cliente</title>

    <link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>
<body>
    
    <?php 
        
        $cod = $_GET["cod"];

        $con = mysqli_connect("localhost","root","","crud");

        $sql = "select * from cliente where cod = ".$cod;

        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <h3>Alteração de Cliente</h3>        
        <form action="atualizar-cliente.php" method="POST">

            <!-- Nome:<br>
            <input type="text" name="nome" required> -->

            
            <input type="hidden" readonly name="cod" required value="<?php echo $row["cod"];?>">

            <div class="input-field">
                <input type="text" name="nome" required id="nome" value="<?php echo $row["nome"];?>">
                <label for="nome">Name</label>
            </div>
            
            <div class="input-field">
                <input type="email" name="email" required id="email" value="<?php echo $row["email"];?>">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field">
                <input type="text" maxlength="11" name="cpf" required id="cpf" value="<?php echo $row["cpf"];?>">
                <label for="cpf">Cpf</label>
            </div>

            <p>
                <label>
                    <input type="radio" name="sexo" required value="M" <?php if($row["sexo"] == "M"){echo "checked";} ?> >
                    <span>Male</span>
                </label>
            </p>

            <p>
                <label>
                    <input type="radio" name="sexo" required value="F"  <?php if($row["sexo"] == "F"){echo "checked";} ?> >
                    <span>Feminine</span>
                </label>
            </p>

            <p>
                <label>
                    <input type="radio" name="sexo" required value="F"  <?php if($row["sexo"] == "F"){echo "checked";} ?> >
                    <span>Feminine</span>
                </label>
            </p>


            <input type="submit" value="Atualizar" class="btn">

        </form>

    </div>
    <script src="materialize/js/materialize.min.js"></script>
</body>
</html>