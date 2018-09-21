<?php
    require_once dirname(__FILE__) . '/sessao.php';
 ?>
<nav>
  <ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="cadastrar_produto.php"> Cadastrar Meu Produto</a></li>
    <li><a href="cadastrar_usuario.php"> Cadastrar-me como cliente</a></li>
    <?php
    if(isset($_SESSION["usuario"])){
    ?>
    <li class="itemDireita"><a href="funcoes/logout.php">Sair</a></li>
    <li class="itemDireita"><p><?=$usuario->getApelido(); ?></p></li>
  <?php }else{ ?>
    <li class="itemDireita"><a href="login.php"> Login</a></li>
  <?php }?>
  </ul>
</nav>
