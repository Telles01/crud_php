<?php 

    //Processo de gravação em banco de dados
    //1- Resgatar os dados do form

    //ucwords() -> converte a primeira letra de cada palavra para maiúsculo
    //strtolower() -> converte para caixa baixa
    //strotoupper() -> converte para caixa alta

    $nome = ucwords($_POST["nome"]);
    $email = strtolower($_POST["email"]);
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];


    //2- Conectar o PHP ao MYSQL
    //endereço, usuario, senha, nome da base
    $con = mysqli_connect("localhost","root","","crud");

    
    //3- Montar a instrução sql de inserção
    //insert into cliente values(null,'David','david@gmail.com','12345678910','M');

    $sql = "insert into cliente values(null,'".$nome."','".$email."','".$cpf."','".$sexo."')";

    //echo $sql;
   

    //echo $sql;
    //4- Executar a instrução sql
    if(mysqli_query($con,$sql)){
        $msg = "Gravado com sucesso!";                
    }else{
        $msg = "Erro ao gravar!";
    }

    //5- Fechar a conexao
    mysqli_close($con);
?>

    
<script>
    alert('<?php echo $msg; ?>');
    location.href="painel.php"; //redirecionamento em JS
</script>