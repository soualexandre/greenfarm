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

</body>
</html>
