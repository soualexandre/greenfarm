<?php
require_once "Conexaoi.php";

class Operacoes_risco
{

    private $uf;
    private $cidade;


    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     *
     * @return  self
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    function local()
    {
        $conexao = new Conexaoi();
        $conecta = $conexao->conectar();
        $log = $_SESSION['login'];

        $lista = array();
        $sql = "select uf,cidade,tipo  from cadastro inner join solo where login = '$log'";

        $query = mysqli_query($conecta, $sql);

        if ($query) {
            while ($rowsCultura = mysqli_fetch_array($query)) {
                array_push($lista, $rowsCultura);
                $uf = $rowsCultura['uf'];
                $cidade = $rowsCultura['cidade'];
                $tipo = $rowsCultura['tipo'];
                $_SESSION['uf'] = $uf;
                $_SESSION['cidade'] = $cidade;
                $_SESSION['tipo'] = $tipo;

                if (
                    $_SESSION['cidade'] == "Paraiso do Tocantins" &&  $_SESSION['tipo'] == 1
                ) {
                    $risco = 30;
                    $_SESSION['risco_percent'] = $risco;
                    if ($_SESSION['risco_percent'] <= 20) {
                        $_SESSION['risco_desc'] = "Baixo";
                    }
                    if ($_SESSION['risco_percent'] <= 30 && $_SESSION['risco_percent'] > 20) {
                        $_SESSION['risco_desc'] = "Médio";
                    }
                    if ($_SESSION['risco_percent'] >= 40) {
                        $_SESSION['risco_desc'] = "Alto";
                    }
                }
            }
        }
    }
}
