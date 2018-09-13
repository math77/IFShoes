<?php

require_once dirname(__FILE__) .'/../classes/Usuario.php';

$email = $_POST["pEmailU"];

$existe = Usuario::atualizarSenha($email);
if($existe != null){
    $to = $email;

    $subject = "Recuperação de senha";
    $txt = "Sua senha de recuperação é: " +$existe+ "<br>"
            . "Por favor altere sua senha o quanto antes.";
    $headers = "From: naoresponda.marcelo@gmail.com" . "\r\n";
    mail($to,$subject,$txt,$headers);
    header("Location: ../login.php");
}else{
    echo "Ooops, esse usuário não existe!";
}
