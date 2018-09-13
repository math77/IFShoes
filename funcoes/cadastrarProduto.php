<?php


require_once dirname(__FILE__).'/../classes/Produto.php';
require_once dirname(__FILE__).'/../classes/Util.php';
require_once dirname(__FILE__).'/../classes/ProdutoImagem.php';

$produto = new Produto();

$produto->setNome($_POST["pNome"]);
$produto->setDescricao($_POST["pDescricao"]);
$produto->setPreco($_POST["pPreco"]);
$idGerado = $produto->salvar();

$imagens = $_FILES["images"];

$destinoImagens = Util::processarImagens($imagens);        


$produtoImagem = new ProdutoImagem();
$produtoImagem->setIdProduto($idGerado);

foreach ($destinoImagens as $destino) {
    $produtoImagem->setImagem($destino);
    $produtoImagem->salvarImagem();
}

 header("Location: ../index.php");
