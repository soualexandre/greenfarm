<?php

class Validacao {
	var $campo;
	var $valor;
	var $msg = array();
        
        
	
	// Mensagens de erro
	function mensagens($num, $campo, $max, $min) {
		
		$this->msg[0] = "Preencha o campo com um email válido <br />"; // EMAIL
		$this->msg[1] = "Telefone inválido (Ex: 01433333333) <br />"; // TELEFONE
		$this->msg[2] = "Preencha o campo ".$campo." com numeros <br />"; // APENAS NUMEROS
		$this->msg[3] = "Preencha o campo ".$campo." <br />"; // CAMPO VAZIO
		$this->msg[4] = "<h4>O ".$campo." deve ter no máximo ".$max." caracteres </h4>"; // MÁXIMO DE CARACTERES
                #<p class='alert alert-danger' role='alert'>Usuário ou senha incorretos!</p>";
  
		$this->msg[5] = "<p class='alert alert-danger' role='alert'>O campo ".$campo." deve ter no mínimo ".$min." caracteres </p>"; // MÍNIMO DE CARACTERES
                $this->msg[6]= "Campo vazio </br>";
		
		return $this->msg[$num];
	}
	
	// Validar Email
	function validarEmail($email) {
            
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			return $this->mensagens(0, 'email', null, null);
		}
	}
	
	// Validar Telefone (01432363810)
	function validarTelefone($telefone) {
            
		if (!preg_match("^[0-9]{11}$", $telefone)) { 
			return $this->mensagens(1, 'telefone', null, null);
		}
	}
	
	// Validar Numero
	function validarNumero($campo,$numero) {
		if(!is_numeric($numero)) {
			return $this->mensagens(2, $campo, null, null);
		}
	}
	
  
        // Verificação simples (Campo vazio, maximo/minimo de caracteres)
	function validarCampo($campo, $valor, $max, $min) {
		$this->campo = $campo;
			if ($valor == "") {
				return $this->mensagens(3, $campo, $max, $min);
			} 
			elseif (strlen($valor) > $max) {
				return $this->mensagens(4, $campo, $max, $min);
			} 
			elseif (strlen($valor) < $min) {
				return $this->mensagens(5, $campo, $max, $min);	
			}
	}
	
	
	// Verifica se há erros
	function verifica() {
		if (sizeof($this->msg) == 0) {
			return true;
		} else {
			return false;
		}
	}
}

