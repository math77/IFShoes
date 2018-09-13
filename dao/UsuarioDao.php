<?php

require_once dirname(__FILE__) . '/Conexao.php';

class UsuarioDao {

    public static function salvarUsuario($nome, $email, $senha, $apelido, $imagemPerfil) {
        $sql = "INSERT INTO usuario(email, senha, nome, apelido, imagemPerfil) VALUES('$email', '$senha', '$nome', '$apelido', '$imagemPerfil')";
        Conexao::executar($sql);
    }
    
    public static function login($email, $senha){
        $sql = "SELECT idUsuario, email, nome, apelido, imagemPerfil FROM usuario WHERE email = '$email' AND senha = '$senha'";
        return Conexao::executar($sql);
    }
    
    public static function atualizarSenha($email, $senha){
        $sql = "UPDATE usuario SET senha = '$senha' WHERE email = '$email'";
        return Conexao::executar($sql);
    }
}
