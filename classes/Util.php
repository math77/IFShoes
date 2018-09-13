<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Util
 *
 * @author 20151114010668
 */
class Util {

    public static function gerarNomeArquivo($imagem){
        $prefixo = "kcolrehs";
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem, $ext);
        $nomeArquivo = uniqid($prefixo, $more_entropy = true);
        return $nomeArquivo.".".$ext[1];
    }

    public static function processarImagens($imagens){
        $destino = "../uploads/produtos/";
        $caminhos = array();

        for ($i = 0; $i < count($imagens["name"]); $i++) {
            $nomeArquivo = Util::gerarNomeArquivo($imagens["name"][$i]);
            $destinoFinal = $destino.$nomeArquivo;
            move_uploaded_file($imagens["tmp_name"][$i], $destinoFinal);
            $caminhos[] = $nomeArquivo;
        }
        return $caminhos;
    }

    public static function processarImagemPerfil($imagem){
        $destino = "../uploads/usuarios/";
        $nomeArquivo = Util::gerarNomeArquivo($imagem["name"]);
        $destinoFinal = $destino.$nomeArquivo;
        if(move_uploaded_file($imagem["tmp_name"], $destinoFinal)){
           return $destinoFinal;
        }
    }

    public static function deletarArquivo($arquivos){
        foreach ($arquivos as $caminho) {
            $cam = "../".$caminho->getImagem();
            unlink($cam);
        }
    }
}
