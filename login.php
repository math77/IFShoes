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
        <link rel="stylesheet" href="css/main.css" >
        <link rel="stylesheet" href="css/modal.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.cycle.all.js"></script>
        <script src="js/main.js"></script>
        <title></title>
    </head>
    <body>
      <?php
          require_once dirname(__FILE__).'/includes/navbar.php';
          require_once dirname(__FILE__).'/includes/info_modal.php';

          if(isset($_SESSION["inexistente"])){
         ?>
        <script> openModal("<?= $_SESSION["inexistente"] ?>")</script>
         <?php }?>
        <div id="form-login">
        <form method="POST" action="funcoes/loginUsuario.php">
            <input type="email" name="pEmail" placeholder="Email...">
            <input type="password" name="pSenha" placeholder="Senha">
            <input type="submit" value="Logar">
        </form>
        <a href="recuperar_senha.php">Esqueceu sua senha?</a>
      </div>
    </body>
</html>
