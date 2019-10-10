<?php
session_start();
if (!isset($_SESSION['logado'])) {
  header("location:../inicial/formulario/login.php");
}
$logado = $_SESSION['login'];

?>


<html>

<head>
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" type="text/css" href="modalidade.css">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>

<body>
  <div class="modalidade-corpo container">
  <div>
    <label for="diaa">Informe a data do incio do plantio</label>
    <input type="date" id="diaa" name="dataInicio">
  </div>
  </div>
</body>

</html>