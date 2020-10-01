<?php 

session_start(); 

//se NÃO (!) existir a sessao nome (que é registrada no verificar-login.php)
//if($_SESSION["nome"] == null){
if(!isset($_SESSION["nome"])){

    session_destroy();
    $msg = "Acesso negado";
    header("location:index.php?msg=".$msg); //redirecionamento em PHP

}elseif($_SESSION["tempo"] + 5*60 < time()){
    session_destroy();
    $msg = "Sessão expirada";
    header("location:index.php?msg=".$msg); //redirecionamento em PHP
}else{
    $_SESSION["tempo"] = time();    
}


?>