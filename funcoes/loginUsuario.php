<?php
session_start();

require_once dirname(__FILE__) .'/../classes/Usuario.php';

if(isset($_POST["pEmail"]) && isset($_POST["pSenha"])){
    $usuario = Usuario::login($_POST["pEmail"], $_POST["pSenha"]);
    if($usuario != null){
        $_SESSION["usuario"] = $usuario;
        unset($_SESSION['mensagem']);
        header("Location: ../index.php");
    }else{
        $_SESSION["inexistente"] = "Ooops, esse usuário não foi encontrado.";
        header("Location: ../login.php");
    }

}
