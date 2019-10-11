<?php
require_once "../models/Operacoes_login.php";
require_once "../views/inicial/classe/Validacao.php";

$login = $_POST["login"];
$senha = $_POST["senha"];

$logar = new Operacoes();


$validacao = new Validacao();
$_SESSION['validacao_login'] = $validacao->validarCampo("Login", $login, 30, 2);
$_SESSION['validacao_senha'] = $validacao->validarCampo("Senha", $senha, 30, 6);
header("location:../views/inicial/formulario/login.php");


if ($validacao->verifica()) {
    $logar->verificar();
}

