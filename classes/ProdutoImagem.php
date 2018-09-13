<?php

require_once dirname(__FILE__). '/../dao/ProdutoImagemDao.php';

class ProdutoImagem {

    private $idProdutoImagem;
    private $idProduto;
    private $imagem;

    public function getIdProdutoImagem() {
        return $this->idProdutoImagem;
    }

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setIdProdutoImagem($idProdutoImagem) {
        $this->idProdutoImagem = $idProdutoImagem;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function salvarImagem() {
        ProdutoImagemDao::salvarProdutoImagem($this->idProduto, $this->imagem);
    }

    public static function deletarProdutoImagem($idProduto){
        ProdutoImagemDao::deletarProdutoImagem($idProduto);
    }

    public static function listarImagens($idProduto) {
        $imagens = array();
        $dados = ProdutoImagemDao::listarImagens($idProduto);

        while ($obj = $dados->fetch_assoc()) {
            $prodImg = new ProdutoImagem();
            $prodImg->setIdProdutoImagem($obj['idProdutoImagem']);
            $prodImg->setImagem('uploads/produtos/'.$obj['imagem']);

            $imagens[] = $prodImg;
        }

        return $imagens;
    }

}
