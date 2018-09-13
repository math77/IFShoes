<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/card_produto.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/modal.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.cycle.all.js"></script>
        <script src="js/main.js"></script>
        <title>IFShoes | Inicio</title>
    </head>
    <body>
        <?php
        require_once dirname(__FILE__).'/includes/navbar.php';

        require_once dirname(__FILE__).'/includes/card_produto.php';
        require_once dirname(__FILE__).'/includes/info_modal.php';

        if (isset($_SESSION["mensagem"])) {
        ?>
        <script> openModal("<?= $_SESSION["mensagem"] ?>"); </script>
        <?php }?>
    </body>
</html>
