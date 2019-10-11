<?php
session_start();

require_once "../../models/Previsao.php";

if (!isset($_SESSION['logado'])) {
    header("location:../inicial/formulario/login.php");
}
$logado = $_SESSION['login'];

$previsao = new Previsao();

$previsoes = $previsao->previsaoDoDia();

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
        <h5 class="card-title">Previsão do tempo - Hoje <?php echo $previsoes[0]->temperatura ?>&deg;C</h5>
        <h6 class="card-subtitle mb-2 text-muted">Clima: <?php echo $previsoes[0]->clima ?></h6>

        <a href="../previsao-semana/previsao-semana.php" class="card-link">Ver privisão para a semana</a>
    </div>

    <hr>

    <div class="alertas" href="../analise-form/analise-form.php">
        <h5 style="text-align:center;" class="dicas">
            Temos alguns alertas para a sua região
        </h5>
        <ul>
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
            <!-- <li>
                contaminações em grande escala de água e solo
            </li> -->

        </ul></ul>
        <div class="float-right container">
            <a class="btn btn-success" href="../detalhe_alerta">Ver mais</a>
        </div>
    </div>
    <hr>
    <h5 class="text-center dicas">Veja algumas dicas de plantio sustentavel</h5>
    <ul>
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
    </ul></ul>
    <div class="float-right container">
        <a href="../plantio-sustentavel/plantio-sustentavel.php">
        <button type="submit" class="btn btn-success">Ver mais</button></a>
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
