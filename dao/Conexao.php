<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Conexao {

    private $usr = "root";
    private $pass = "root";
    private $url = "127.0.0.1";
    private $banco = "ifshoes";

    private function getConexao() {
        return new mysqli($this->url, $this->usr, $this->pass, $this->banco);
    }

    public static function executar($query) {
        $obj = new Conexao();
        $con = $obj->getConexao();
        $resultado = $con->query($query);
        if(substr($query, 0, 6) == "INSERT"){
            return mysqli_insert_id($con);
        }
        $con->close();
        return $resultado;
    }

}
