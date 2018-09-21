<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Recuperar Senha</title>
    </head>
    <body>
      <?php
      require_once dirname(__FILE__).'/includes/navbar.php';
      ?>
      <div id="form-recuperacao">
        <form method="POST" action="funcoes/recuperarSenha.php">
            <input type="email" name="pEmailU" placeholder="Email">
            <input type="submit" value="Recuperar">
        </form>
      </div>
    </body>
</html>
