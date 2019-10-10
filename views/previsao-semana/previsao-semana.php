<?php
session_start();
if(!isset($_SESSION['logado'])){
    header("location:../inicial/formulario/login.php");
}
$logado = $_SESSION['login'];

$url = 'http://gabriel.pereira.si3pifto.com.br/previsao_da_semana.php';

$previsoes = json_decode(file_get_contents($url));

require_once "../inicial/modelo/cabecalho_app.php";

?>
<html lang="pt-br">
  <head>
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" type="text/css" href="estilo.css">
      <title>Green Farm BR</title>
  </head>
<body>
<div class="container">
    <h2 class="text-center">Paraíso do tocantins</h2>
    <ul class="list-group text-center">
        <?php
        foreach ($previsoes as $previsao) {
            echo "<li class='list-group-item'><h4>Dia: ".$previsao->data."</h4>Temperatura mínima: ".$previsao->mintemperatura."&deg;C<br>Temperatura máxima: ".$previsao->maxtemperatura."&deg;C</li>";
        }
        ?>
    </ul>
</div>
</body>
</html>
