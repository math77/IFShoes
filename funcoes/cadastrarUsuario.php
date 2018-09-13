<?php

require_once dirname(__FILE__) .'/../classes/Usuario.php';
require_once dirname(__FILE__).'/../classes/Util.php';

$usuario = new Usuario();
$usuario->setNome($_POST["pNome"]);
$usuario->setEmail($_POST["pEmail"]);
$usuario->setSenha($_POST["pSenha"]);
$usuario->setApelido($_POST["pApelido"]);


if (isset($_FILES["pFotoPerfil"]) && !empty($_FILES["pFotoPerfil"])) {
    $fotoPerfil = $_FILES["pFotoPerfil"];
    $caminho = Util::processarImagemPerfil($fotoPerfil);
    $usuario->setImagemPerfil($caminho);
}

$usuario->salvar();
