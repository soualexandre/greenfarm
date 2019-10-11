<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("location:../inicial/formulario/login.php");
}
$logado = $_SESSION['login'];

$url = 'http://gabriel.pereira.si3pifto.com.br/previsao_do_dia.php';

$previsoes = json_decode(file_get_contents($url));

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

<h4 style="text-align:center;" id="saudacoes">Bem vindo <?php echo $_SESSION['login']; ?></h4>
<div class="card container">
    <div class="card-body">
<<<<<<< HEAD
      <h5 class="card-title">Temperatura - Agora <?php echo $previsoes[0]->temperatura ?>&deg;C</h5>
      <h6 class="card-subtitle mb-2 text-muted">Clima: <?php echo $previsoes[0]->clima ?></h6>
      
      <a href="../previsao-semana/previsao-semana.php" class="card-link">Ver privisão para a semana</a>
=======
        <h5 class="card-title">Previsão do tempo - Hoje <?php echo $previsoes[0]->temperatura ?>&deg;C</h5>
        <h6 class="card-subtitle mb-2 text-muted">Clima: <?php echo $previsoes[0]->clima ?></h6>

        <a href="../previsao-semana/previsao-semana.php" class="card-link">Ver privisão para a semana</a>
>>>>>>> 2368962bbb843a7f00fd8b9155d49447b497be57
    </div>

    <hr>

    <div class="alertas" href="../analise-form/analise-form.php">
        <h5 style="text-align:center;">
            Temos alguns alertas para a sua região
        </h5>
        <ul>
            <li>
                Chuva torrencial
            </li>
            <li>
                Enchente
            </li>
            <li>
                Queimadas
            </li>
            <li>
                pragas
            </li>
            <li>
                contaminações em grande escala de água e solo
            </li>

        </ul>
        <div class="float-right container">
            <button type="submit" class="btn btn-success">Ver mais</button>
        </div>
    </div>
    <hr>
    <h5 class="text-center dicas">Dicas de plantio sustentavel</h5>

    <ul>
        <li>
            Utilizar solo sem contaminantes;
        </li>
        <li>
            Se possível, esterilizar o solo antes de plantar (solarização);
        </li>
        <li>
            Comprar mudas sadias;
        </li>
        <li>
            Não exagerar na adubação;
        </li>
        <li>
            Irrigar corretamente;
        </li>
    </ul>
    <div class="float-right container">
        <button type="submit" class="btn btn-success">Ver mais</button>
    </div>
    <hr>
    <div class="fab">
        <a href="../analise-form/analise-form.php" style="text-decoration:none;">
            <button class="main">
            </button>
        </a>

    </div>
    <script type="text/js" src="srcipt-botao.js"></script>

</div>
</body>

</html>
