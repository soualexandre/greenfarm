<?php
require_once("../inicial/modelo/cabecalho_app.php");
require_once("../../models/operacoes_cultura.php");
require_once("../../models/operacoes_risco.php");
header('Content-Type: text/html; charset=utf-8');

$res = new Operacoes_risco();
$res->local();

if($_SESSION['cultura_nome']  == "default"){
    $selecionar = "Selecione uma cultura";
    $_SESSION['selecionar'] = $selecionar;
    header("location:../analise-form/analise-form.php");
}


?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="resultado.css">
<meta charset="utf-8" />


<div class="container div-resultado"><hr>
    <h4><?php
        echo  $_SESSION['cultura_nome']; ?></h4>
    <h6>Status do solo: <span id="success">Apto </span></h6>

    <h6>Tipo de solo: <span id="success">Rochoso </span></h6>

    <h6>Risco de perda: <span id="success"> 
                                            Baixo <= 20%</span><span id="porcentagem">
          
        </span> </h6>
    <hr>

    <h5>Descrição:</h5>
    <label for="" class="label-resultado"> <?php
                                            echo $_SESSION['cultura_descricao']; ?></label>
    <hr>

    <h5>Região: </h5>
    <label for="" class="label-resultado"> <?php
                                            echo $_SESSION['cultura_regiao']; ?></label>
</div>
<div class="container">
<hr>

    <h5>Como plantar: <?php
                        echo  $_SESSION['cultura_nome']; ?> </h5>

    <label for="" class="label-resultado"> <?php
                                            echo $_SESSION['cultura_plantio']; ?></label>
    <hr>
    <a href="../acompanhamento/acompanhamento_plantio.php" style="text-decoration:none;">
        <button type="submit" class="btn btn-success col-12">Iniciar Acompanhamento de Plantio</button>
    </a>
    </form>
</div>

</div>