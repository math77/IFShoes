<?php

require_once dirname(__FILE__).'/../dao/ProdutoDao.php';
require_once dirname(__FILE__).'/ProdutoImagem.php';

class Produto {

    private $idProduto;
    private $preco;
    private $descricao;
    private $nome;
    private $imagens;

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getImagens() {
        return $this->imagens;
    }

    public function setImagens($imagens) {
        $this->imagens = $imagens;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function salvar() {
        return ProdutoDao::salvarProduto($this->nome, $this->descricao, $this->preco);
    }

    public function carregarImagens($idProduto){
        $this->imagens = ProdutoImagem::listarImagens($idProduto);
    }

    public static function deletarProduto($idProduto){
        ProdutoDao::deletarProduto($idProduto);
    }

    public static function listarProdutos() {
        $produtos = array();
        $dados = ProdutoDao::listarProdutos();

        if ($dados != null) {
            while ($obj = $dados->fetch_assoc()) {
                $prod = new Produto();
                $prod->setNome($obj['nome']);
                $prod->setDescricao($obj['descricao']);
                $prod->setPreco($obj['preco']);
                $prod->setIdProduto($obj['idProduto']);
                $prod->carregarImagens($obj['idProduto']);
                $produtos[] = $prod;
            }
        }
        return $produtos;
    }

}
