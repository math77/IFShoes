<div id="container">
  <?php
  require_once './classes/Produto.php';

  $dados = Produto::listarProdutos();
  foreach ($dados as $produto) {

  ?>
  <div class="card">
  <form method="GET" action="funcoes/deletarProduto.php">
    <input type="hidden" value="<?=$produto->getIdProduto();?>" name="idProduto">
    <div class="slide">
      <ul>
    <?php
        foreach($produto->getImagens() as $imagem){

      ?>
        <li>
          <img src="<?=$imagem->getImagem();?>" id="imgProduto">
        </li>

      <?php } ?>
    </ul>
    </div>
    <h1 class="teste"><?=$produto->getNome();?></h1>
    <span><?=$produto->getPreco();?></span>
    <span>R$</span>
    <p>
      <?=$produto->getDescricao();?>
    </p>


  <hr>
  <input type="submit" value="Deletar">
  <input type="button" value="Atualizar">
</form>
</div>
<?php } ?>
</div>
