<?php


class Previsao
{
    public function previsaoDoDia()
    {
        $feed = file_get_contents("https://www.tempoagora.com.br/previsao-do-tempo/TO/ParaisodoTocantins");//Alterar para pegar a cidade

        $temperatura = explode('"temp"', $feed);
        $climas = explode('"weatherDesc"', $feed);

        $string = '[{"temperatura": "' . $temperatura[1][1] . $temperatura[1][2] . '",' . '"clima": "';
        $cont = 0;
        $i = 1;

        while ($cont != 2) {
            if ($climas[1][$i] == '"') {
                $cont++;
            } else {
                $string .= $climas[1][$i];
            }
            $i++;
        }
        return json_decode($string . '"}]');
    }
}
