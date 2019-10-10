<meta charset="utf-8" />
<?php
session_start();
require_once "Conexaoi.php";
class Operacoes_cultura
{
    private $dataInicio;
    private $dataFim;
    private $cultura;
    private $solo;
    public $cultura_nome;
    public $cultura_descricao;
    public $cultura_regiao;

    /**
     * Get the value of cultura
     */
    public function getCultura()
    {
        return $this->cultura;
    }

    /**
     * Set the value of cultura
     *
     * @return  self
     */
    public function setCultura($cultura)
    {
        $this->cultura = $cultura;

        return $this;
    }

    /**
     * Get the value of dataInicio
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set the value of dataInicio
     *
     * @return  self
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get the value of dataFim
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Set the value of dataFim
     *
     * @return  self
     */
    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    /**
     * Get the value of solo
     */
    public function getSolo()
    {
        return $this->solo;
    }

    /**
     * Set the value of solo
     *
     * @return  self
     */
    public function setSolo($solo)
    {
        $this->solo = $solo;

        return $this;
    }
    function listar($cultura)
    {
        $conexao = new Conexaoi();
        $con = $conexao->conectar();


        $lista = array();
        $sql = "select * from cultura where cultura_nome = '$cultura'" or die(mysql_error());

        $query = mysqli_query($con, $sql);

        if ($query) {
            while ($rowsCultura = mysqli_fetch_array($query)) {
                array_push($lista, $rowsCultura);
                $cultura_nome = $rowsCultura['cultura_nome'];
                $cultura_descricao = $rowsCultura['cultura_descricao'];
                $cultura_regiao = $rowsCultura['cultura_regiao'];
                $cultura_plantio = $rowsCultura['cultura_plantio'];
                echo $cultura_nome;
                echo $cultura_descricao;
                echo$cultura_plantio;
                echo $cultura_regiao;

                $_SESSION['cultura_nome'] = $cultura_nome;
                $_SESSION['cultura_descricao'] = $cultura_descricao;
                $_SESSION['cultura_regiao'] = $cultura_regiao;
                $_SESSION['cultura_plantio'] = $cultura_plantio;
               
            
            }
            
        }
        else{
            echo"Erro 404";
        }

        header("location:../viewS/resultado/resultado_avaliacao.php");

    }
}
