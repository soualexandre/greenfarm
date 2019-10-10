<?php
ini_set('display_errors', 0 );
error_reporting(0);
session_start();
if(isset($_SESSION['logado'])){
header("location:../../home/app_home.php");
}
$logado = $_SESSION['login'];
error_reporting(0);
require_once "../modelo/cabecalho.php";
?>


<html>
  <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="../../../public/css/layout.css">
  </head>
<body id="LoginForm">

<div class="container col-10 col-md-3 form_logar">
   <p>Por favor, digite seu login e senha para ter acesso ao nosso sistema.</p>
  
   <?php
    if(isset($_SESSION['falha_login'])){
      echo $_SESSION['falha_login'];
   unset ($_SESSION['falha_login']);
  }
   
   ?>
   <form action="../../../controllers/DadosLogin.php" method="POST"> 

        <div class="form-group">
  <div class="input-login1">
          <?php
           if(isset($_SESSION['validacao_login'])){
      echo $_SESSION['validacao_login'];
      unset ($_SESSION['validacao_login']);
           }
          ?>

            <input type="text" class="form-control" name="login" placeholder="Login">
    
      </div>

        <div class="form-group">
              <div class="input-login2">
            <input type="password" class="form-control" name="senha" placeholder="Senha">
            <?php
             if(isset($_SESSION['validacao_senha'])){
      echo $_SESSION['validacao_senha'];
      unset ($_SESSION['validacao_senha']);
             }
      ?>
        </div>
        <div class="forgot">
          <hr>
            <a href="cadastro.php">Não cadastrado? </a>
</div>
  <div class="botao-acces">
        <button type="submit" class="btn btn-success">Acessar</button>
</div>
    </form>
    </div>
 


</body>
</html>


