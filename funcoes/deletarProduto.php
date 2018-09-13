<?php
require_once dirname(__FILE__).'/../classes/Produto.php';
require_once dirname(__FILE__).'/../classes/Util.php';
require_once dirname(__FILE__).'/../classes/ProdutoImagem.php';

$idProduto = $_GET["idProduto"];
$arquivos = ProdutoImagem::listarImagens($idProduto);

    Util::deletarArquivo($arquivos);
    ProdutoImagem::deletarProdutoImagem($idProduto);
    Produto::deletarProduto($idProduto);
    header("Location: ../index.php");

?>
