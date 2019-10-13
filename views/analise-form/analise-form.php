<?php
session_start();

require_once "../inicial/modelo/cabecalho_app.php";

?>
<link type="text/css" href="analise.css">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<div class="container">
<form action="../../controllers/controller-cultura.php" method="POST">
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
</div>

<hr>
<div class="form-check">
  <input class="form-check-input" type="radio" name="solo[]" id="exampleRadios1" value="4" checked>
  <label class="form-check-label" for="exampleRadios1">
   Argiloso
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="solo[]" id="exampleRadios2" value="2">
  <label class="form-check-label" for="exampleRadios2">
    Humoso
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="solo[]" id="exampleRadios2" value="3">
  <label class="form-check-label" for="exampleRadios2">
    Calcário
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="solo[]" id="exampleRadios2" value="1">
  <label class="form-check-label" for="exampleRadios2">
    Arenoso
  </label>
</div>

<hr>
<div class="modalidade-corpo container">
  <div>
    <label for="diaa">Informe a data do incio do plantio</label>
    <input type="Month" id="diaa" name="dataInicio">
  </div>
  </div>
  <hr>
  <button type="submit" class="btn btn-success">Submeter</button>
</form>

</form>
<script type="text/javascript" src="../../public/js/script-estado-cidade.js"></script>
</div>
