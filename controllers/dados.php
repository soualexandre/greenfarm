<?php
require_once "../models/Operacoes_login.php";
require_once "../models/operacoes_risco.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$senhaconfirma = $_POST["senhaconfirma"];
$uf = $_POST["uf"];
$cidade = $_POST["cidade"];


$risco = new Operacoes();


$acao = new Operacoes();

$acao->setNome($nome);
$acao->setEmail($email);
$acao->setTelefone($telefone);
$acao->setLogin($login);
$acao->setSenha($senha);
$acao->setSenhaconfirma($senhaconfirma);
$acao->setUf($uf);
$acao->setCidade($cidade);

if($acao->cadastrar() == true){
    header("Location: ../views/home/app_home.php");
}else{
    header("Location: ../views/home/app_home.php");
}
//$risco->risco();


