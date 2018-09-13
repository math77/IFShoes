<?php

require_once dirname(__FILE__).'/Conexao.php';

class ProdutoDao {

    public static function salvarProduto($nome, $descricao, $preco){
        $sql = "INSERT INTO produto(nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
        $idGerado = Conexao::executar($sql);
        return $idGerado;
    }

    public static function listarProdutos(){
        $sql = "SELECT idProduto, nome, descricao, preco FROM produto";
        return Conexao::executar($sql);
    }

    public static function deletarProduto($idProduto){
      $sql = "DELETE FROM produto WHERE idProduto = '$idProduto'";
      Conexao::executar($sql);
    }
}
