<?php 

    //Processo de atualização em banco de dados
    //1- Resgatar os dados do form

    $cod = $_POST["cod"]; //veio pelo input hidden
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];


    //2- Conectar o PHP ao MYSQL
    //endereço, usuario, senha, nome da base
    $con = mysqli_connect("localhost","root","","crud");

    
    //3- Montar a instrução sql de atualização
    
    $sql = "update cliente set nome='".$nome."', email='".$email."', cpf='".$cpf."', sexo='".$sexo."' 
    where cod = ".$cod;

    //echo $sql;
   

    //echo $sql;
    //4- Executar a instrução sql
    if(mysqli_query($con,$sql)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }

    //5- Fechar a conexao
    mysqli_close($con);
?>

    
<script>
    alert('<?php echo $msg; ?>');
    location.href="painel.php"; //redirecionamento em JS
</script>