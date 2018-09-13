<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/navbar.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/main.js"></script>
        <title></title>
        <?php
            require_once dirname(__FILE__) . '/includes/sessao.php';
            loginRequerido();
         ?>
    </head>
    <body>
      <?php
            require_once dirname(__FILE__).'/includes/navbar.php';
        ?>
        <div id="form-produto">
            <img src="img/icons/price-tag.png" id="logo">
            <form method="POST" action="funcoes/cadastrarProduto.php" enctype="multipart/form-data">
                <input type="text" name="pNome" placeholder="Nome">
                <textarea name="pDescricao" placeholder="Descriçao"></textarea>
                <input type="number" name="pPreco" placeholder="Preço">
                <label for="arquivo" id="icone">Selecionar</label>
                <input id="arquivo" type="file" name="images[]" multiple>
                <input type="submit" value="Cadastrar" id="salvar">
            </form>
        </div>
    </body>
</html>
