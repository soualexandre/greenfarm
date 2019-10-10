<?php
session_start();

 
?>

<link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript" src="../../../public/js/script-estado-cidade.js"></script>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<div class="container"> 
<form action="../../../controllers/dados.php" method="POST">
    <div class="formulario container">
        <p>Para se cadastrar é nescessário conexão com a internet </p>
  <div class="form-group">
       <label for="nome">Nome</label>
    <input type="text" class="form-control" name ="nome" placeholder="Digite seu nome">
    </div>
    <div class="form-group">
    <label for="Email1">Email</label>
    <input type="email" class="form-control"  name="email" placeholder="Seu email">
  </div>


  <div class="cidade-estado">
  <label for="uf" class="input-label">Estado</label>
  <select name="uf" id="uf" disabled data-target="#cidade">
        <option value="">Estado</option>
    </select>
</div>


<div>
  <label for="cidade" class="input-label">Cidade</label>
  <select name="cidade" id="cidade" disabled>
        <option value="">Cidade</option>
    </select>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <div class="form-group">
       <label for="telefone">Telefone</label>
       <input type="text" class="form-control" name="telefone" placeholder="Telefone">
    </div>
    
    <div class="form-group">
       <label for="login">Login </label>
       <input type="text" class="form-control" name="login" placeholder="Login de acesso">
    </div>
    
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" placeholder="Senha">
  </div>
     
        <?php
  
  if(isset($_SESSION['errado'])){
      echo $_SESSION['errado'];
   unset ($_SESSION['errado']);
  }
        ?>
         
      <div class="form-group">
    <label for="exampleInputPassword1">Confirmar senha</label>
    <input type="password" class="form-control" name="senhaconfirma"  placeholder="Confirmar senha">
  </div>
 
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
