<?php
    require_once dirname(__FILE__).'/../classes/Usuario.php';
    
    session_start();
  
    $usuario = new Usuario();
    if(isset($_SESSION['usuario'])){
        $usuario = $_SESSION['usuario'];
    }

    function loginRequerido(){
        global $usuario;
        if(empty($usuario->getIdUsuario())){
            $_SESSION['mensagem'] = "Faça login para acessar o sistema.";
            header("Location: index.php");
        }
    }
