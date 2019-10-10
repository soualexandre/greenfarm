<?php
session_start();
if(!isset($_SESSION['logado'])){
    header("location:../inicial/formulario/login.php");
}
$logado = $_SESSION['login'];

$url = 'http://gabriel.pereira.si3pifto.com.br/previsao_do_dia.php';

$previsoes = json_decode(file_get_contents($url));

require_once "../inicial/modelo/cabecalho_app.php";
?>
