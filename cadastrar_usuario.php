<!DOCTYPE html>
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
        <div id="form-usuario">
            <form method="POST" action="funcoes/cadastrarUsuario.php" enctype="multipart/form-data">
                <img src="img/icons/sem-foto.gif" alt="Icone de no profile image" id="preview-perfil">
                <label for="foto-perfil">Escolher foto de perfil</label>
                <input type="file" name="pFotoPerfil" id="foto-perfil">
                <input type="text" name="pNome" placeholder="Seu Nome" >
                <input type="text" name="pApelido" placeholder="Como quer ser chamado?">
                <input type="text" name="pEmail" placeholder="Email">
                <input type="password" name="pSenha" placeholder="Senha">
                <input type="submit" name="bEnviar"  value="Enviar" id="salvar">
            </form>
            <span id="mini-logomarca">IFshoes &COPY;</span>
        </div>
    </body>
</html>
