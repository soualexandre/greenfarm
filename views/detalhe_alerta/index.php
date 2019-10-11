<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header("location:../inicial/formulario/login.php");
}
require_once "../inicial/modelo/cabecalho_app.php";
?>
<html lang="pt-br">
<head>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Detalhes dos alertas</title>
</head>
<body>
<div class="container">
    <br>
    <h4 class="text-center">Alertas para a sua região</h4>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Sem alertas para esse período
            <span class="badge badge-success badge-pill">0</span>
        </li>
    </ul>
    <hr>
    <h4 class="text-center">Alertas de alguns anos atrás para a sua região</h4>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Enchentes<p class="text-left">Ano: 2008</p>
            <span class="badge badge-primary badge-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Enchorradas<p class="text-left">Ano: 2009</p>
            <span class="badge badge-primary badge-pill">1</span>
        </li>
    </ul>
    <hr>
</div>
</body>
</html>
