<?php 
    session_start(); //inicia o uso da sessão pelo browser

    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);

    //echo $senha;

    $con = mysqli_connect("localhost","root","","crud");

    $sql = "select * from usuario where login = '".$login."' and senha = '".$senha."'";

    //echo $sql;

    $result = mysqli_query($con,$sql);

    //var_dump($result);

    if(mysqli_num_rows($result) == 1){
        
        $row = mysqli_fetch_array($result);
        //Guardar valores em sessão (na memória do browser)        
        
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["perfil"] = $row["perfil"];

        //var_dump($_SESSION);
        header("location:painel.php");

    }else{
        $msg = "Login/Senha inválido(s)";
        header("location:index.php?msg=".$msg); //redirecionamento em PHP
    }

    mysqli_close($con);
?>