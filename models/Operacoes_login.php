<?php
session_start();
require_once "Conexaoi.php";
require_once "../views/inicial/classe/Mensagens.php";

class Operacoes
{

    private $nome;
    private $email;
    private $telefone;
    private $login;
    private $senha;
    private $senhaconfirma;
    private $uf;
    private $cidade;

    function getNome()
    {
        return $this->nome;
    }


    function getEmail()
    {
        return $this->email;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

    function getLogin()
    {
        return $this->login;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getSenhaconfirma()
    {
        return $this->senhaconfirma;
    }

    function getUf()
    {
        return $this->uf;
    }

    function getCidade()
    {
        return $this->cidade;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }


    function setEmail($email)
    {
        $this->email = $email;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function setLogin($login)
    {
        $this->login = $login;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function setSenhaconfirma($senhaconfirma)
    {
        $this->senhaconfirma = $senhaconfirma;
    }

    function setUf($uf)
    {
        $this->uf = $uf;
    }

    function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    function cadastrar()
    {
        $conexao = new Conexaoi();
        $conecta = $conexao->conectar();
        if ($_POST) {
            $senha = $_POST['senha'];
            $senhaconfirma = $_POST['senhaconfirma'];
            if ($senha == $senhaconfirma) {
                $sql = "INSERT INTO cadastro (nome, email, telefone, login, senha, senha_confirma, uf, cidade)
            VALUES('$this->nome', '$this->email', '$this->telefone' , '$this->login', '$this->senha', 
                '$this->senhaconfirma','$this->uf','$this->cidade')";

                $query = mysqli_query($conecta, $sql);


                if ($query) {
                    $_SESSION['logado'] = true;
                    $_SESSION['login'] = $this->login;
                    $_SESSION['senha'] = $this->senha;
                    return true;
                    //$mensagem = new Mensagens();
                    //$mensagem->sucesso();
                } else {
                    unset($_SESSION['login']);
                    unset($_SESSION['senha']);
                    $_SESSION['falha_login'] = "<p class='text-danger'>Usuario ou senha incorretos!</p>";
                    return false;
                    //$mensagem = new Mensagens();
                    //$mensagem->fracasso();
                }
            } else {

                $_SESSION['errado'] = "<p class='text-danger'>Erro! As senhas não coincidem</p>";

                header("location:../views/inicial/formulario/cadastro.php");
            }
        }
    }

    function verificar()
    {
        $conexao = new Conexaoi();
        $conecta = $conexao->conectar();
        if ($_POST) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $sql = "select * from cadastro where login = '$login' and senha= '$senha'";

            $query = mysqli_query($conecta, $sql);
            $resultado = mysqli_num_rows($query);

            if ($resultado > 0) {

                $_SESSION['logado'] = true;
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                header("Location:../views/home/app_home.php");

            } else {
                unset($_SESSION['login']);
                unset($_SESSION['senha']);
                $_SESSION['falha_login'] = "<p class='text-danger'>Usuario ou senha incorretos!</p>";

                header("Location:../views/inicial/formulario/login.php");
            }
        }
    }
}
