<?php
session_start();
if (!isset($_SESSION['logado'])) {
  header("location:../inicial/formulario/login.php");
}
$logado = $_SESSION['login'];

require_once("../inicial/modelo/cabecalho_app.php");
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
  <hr>
  <div class="modalidade-corpo container">
  <div>
    <label for="diaa">Informe a data do incio do plantio</label>
    <input type="date" id="diaa" name="dataInicio">
  </div>
 

  <div class="cultura">
  <hr>
  <label for="cultura" class="input-label">Cultura</label>
  <select name="cultura" id="cultura" style="width:100%; height:40px;border-radius:10px;">
        <option value="default" default>Selecione um item</option>
        <option value="arroz">Arroz</option>
        <option value="feijão">Feijão</option>
        <option value="Abacaxi">abacaxi</option>
        <option value="Mandioca">Mandioca</option>
        <option value="Banana">Banana</option>
        <option value="colve">colve</option>
    </select>

<br><br>
    <button type="submit" class="btn btn-success"> Submeter</button>

</div>
  

</body>



</html>