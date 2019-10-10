<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<?php

class Mensagens {
 
    function sucesso(){
        echo "<h3 class= 'text-success'> Parabéns! Agora você está cadastrado no nosso sistema... </h3>";
        echo "<a href='../views/inicial/formulario/login.php'>Fazer login agora</a>";
    }
    
    function fracasso(){
        echo "<h3 class= 'text-danger titulo'> Erro ao se cadastrar!... </h3>";
        echo "<a href='../views/inicial/formulario/login.php'>Voltar</a>";
    }

}
