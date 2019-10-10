<?php
require_once "../models/Operacoes_cultura.php";
require_once "../models/Operacoes_risco.php";

$dataInicio = $_POST["dataInicio"];
$dataFim = $_POST["dataFim"];
$cultura = $_POST['cultura'];

foreach ($_POST['solo'] as $solo) {
 }

$acao = new Operacoes_cultura();
$ir = new Operacoes_risco();

$acao->setDataInicio($dataInicio);
$acao->setDataFim($dataFim);
$acao->setCultura($cultura);
$acao->setSolo($solo);

$acao->listar($cultura);
