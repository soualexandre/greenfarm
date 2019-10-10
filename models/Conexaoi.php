<?php

class Conexaoi {
    private $servidor; 
    private $usuario;
    private $senha;
    private $nomebanco;

    function __construct() {
        $this->servidor = "162.241.2.188";
        $this->usuario = "si3pif51_pereira";
        $this->senha = "gabriel1234";
        $this->nomebanco = "si3pif51_pereira";
    }

    function conectar() {
        $conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->nomebanco);
        
        mysqli_set_charset($conexao, 'utf-8');
        
        
        return $conexao;
        
       
    }

}
