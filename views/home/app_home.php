<?php
session_start();
if(!isset($_SESSION['logado'])){
header("location:../inicial/formulario/login.php");
}
$logado = $_SESSION['login'];

require_once "../inicial/modelo/cabecalho_app.php";
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
<link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
<body>

  



<h4 style="text-align:center;" id="saudacoes" >Bem vindo <?php echo $_SESSION['login']; ?></h4>
<div class="card container" >
  <div class="card-body">
    <h5 class="card-title">Previsão do tempo</h5>
    <h6 class="card-subtitle mb-2 text-muted">hoje</h6>
    <a href="../analise-form/analise-form.php" class="card-link">Página de análise</a>
  </div>

<hr>
<h5 style="text-align:center;">
  Temos alguns alertas para a sua região
</h5>
<ul>
  <li>
    Alerta 1
  </li>
  <li>
    Alerta 2
  </li>
  <li>
    Alerta 3
  </li>
  <li>
    Alerta 4
  </li>
  <li>
    Alerta 5
  </li>
  <li>
    Alerta 4
  </li>
  <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li> <li>
    Alerta 4
  </li>
</ul>
<hr>

<div class="fab">
 <a href="../analise-form/analise-form.php" style="text-decoration:none;"> <button class="main" >
  </button></a>
 
</div>
<script type="text/js" src="srcipt-botao.js" ></script>

</div>
</body>
</html>


