<?php

namespace FreteCorreios\Services;

use FreteCorreios\Helpers\CurlHelper;

class ConsultaWebService extends Service
{

    private function getUrl()
    {
        return "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx";
    }

    private function calcular()
    {
        $curl = new CurlHelper( $this->getUrl(), get_object_vars( $this ) );

        return $curl->execute();
    }

    public  function calcPreco()
    {
        $this->nIndicaCalculo = 1;
        return $this->calcular();
    }

    public  function calcPrazo()
    {
        $this->nIndicaCalculo = 2;
        return $this->calcular();
    }

    public  function calcPrecoPrazo()
    {
        $this->nIndicaCalculo = 3;
        return $this->calcular();
    }

}