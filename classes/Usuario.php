<?php

require_once dirname(__FILE__).'/../dao/UsuarioDao.php';

class Usuario {
    private $nome;
    private $email;
    private $senha;
    private $apelido;
    private $imagemPerfil;
    private $idUsuario;

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getApelido() {
        return $this->apelido;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getImagemPerfil() {
        return $this->imagemPerfil;
    }

    public function setImagemPerfil($imagemPerfil) {
        $this->imagemPerfil = $imagemPerfil;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setApelido($apelido) {
        $this->apelido = $apelido;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function salvar(){
        UsuarioDao::salvarUsuario($this->nome, $this->email, $this->senha, $this->apelido, $this->imagemPerfil);
    }
    
    
    public static function atualizarSenha($email){
        $senha = mt_rand(5, 30);
        if(UsuarioDao::atualizarSenha($email, $senha)){
            return $senha;
        }
        return null;
    }

    public static function login($email, $senha){
        $user = null;
        $dados = UsuarioDao::login($email, $senha);

        if ($dados == null) {
          echo "Não encontrado";
        }else{
          while ($obj = $dados->fetch_assoc()) {
              $user = new Usuario();
              $user->setNome($obj['nome']);
              $user->setEmail($obj['email']);
              $user->setApelido($obj['apelido']);
              $user->setImagemPerfil($obj['imagemPerfil']);
              $user->setIdUsuario($obj['idUsuario']);

            }
      }
      return $user;
    }
}
