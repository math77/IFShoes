<?php

require_once dirname(__FILE__).'/Conexao.php';

class ProdutoImagemDao {

    public static function salvarProdutoImagem($idProduto, $imagem){
        $sql = "INSERT INTO produtoimagem (idProduto, imagem) VALUES ('$idProduto', '$imagem')";
        Conexao::executar($sql);
    }

    public static function listarImagens($idProduto){
        $sql = "SELECT idProdutoImagem, imagem FROM produtoimagem WHERE idProduto = $idProduto;";
        return Conexao::executar($sql);
    }

    public static function deletarProdutoImagem($idProduto){
      $sql = "DELETE FROM produtoimagem WHERE idProduto = '$idProduto'";
      Conexao::executar($sql);
    }
}
