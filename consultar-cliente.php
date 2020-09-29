<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>

        function confirmaExclusao(cod,nome){            
            
            if(confirm('Deseja realmente excluir o(a) cliente '+nome+' ?')){

                location.href="excluir-cliente.php?cod="+cod;

            }

        }

    </script>

</head>
<body>

    <div class="container">

        <h3>Consulta de Clientes</h3>
       
        <form action="consultar-cliente.php" method="get">

            <input type="text" name="nome" placeholder="Digite um nome para pesquisar">

            <input type="submit" value="Pesquisar" class="btn">

        </form>

        <?php
            //isset() -> Verifica se a variável é diferente de NULL
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];            

                //Abrir conexão com o mysql
                $con = mysqli_connect("localhost","root","","crud");

                //Montar a instrução sql de consulta
                $sql = "select * from cliente where nome like '".$nome."%'";
                //echo $sql;

                //Executando a pesquisa
                $result = mysqli_query($con,$sql);
                //var_dump($result);

                //se o número de linha do resultado é maior que zero
                if(mysqli_num_rows($result) > 0){
                    //echo "ok";
                    ?>
                    
                    <table>
                        <tr>                           
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Cpf</th>
                            <th>Sexo</th>
                            <th  class="center-align">Editar</th>
                            <th  class="center-align">Excluir</th>
                        </tr>

                        <?php               

                         while($row = mysqli_fetch_array($result)){
                            //var_dump($row);
                        ?>

                        <tr>                            
                            <td><?php echo $row["nome"];?></td>
                            <td><?php echo $row["email"];?></td>
                            <td><?php echo $row["cpf"];?></td>
                            <td><?php echo $row["sexo"];?></td>
                            <td class="center-align"><a href="editar-cliente.php?cod=<?php echo $row["cod"]; ?>"><i class="material-icons orange-text">edit</i></a></td>
                            <td class="center-align"><a href="#" onclick="confirmaExclusao(<?php echo $row['cod']; ?>,'<?php echo $row["nome"];?>')"><i class="material-icons red-text">delete_forever</i></a></td>
                        </tr>
                        
                         <?php } //fim do loop ?>

                    </table>
                        
                    <?php
                }else{
                    echo "<p>Nenhum cliente encontrado</p>";
                }

                mysqli_close($con);

            }
            
        ?>
        
    </div>
</body>
</html>