<?php
/**
 * Created by PhpStorm.
 * User: ferafigueiredo
 * Date: 06/03/17
 * Time: 23:33
 */

require_once __DIR__ . '/vendor/autoload.php';




use \FreteCorreios\Services\ConsultaWebService;
use \FreteCorreios\Helpers\FormatoEncomenda\Caixa;
use \FreteCorreios\Helpers\CodigoServico\PacVarejo;

$consulta = new ConsultaWebService();

$consulta->setCepOrigem("03280000");
$consulta->setCepDestino("18080090");
$consulta->setPeso(1);
$consulta->setCodigoFormato(new Caixa());
$consulta->setComprimento(30);
$consulta->setAltura(30);
$consulta->setLargura(30);
$consulta->setCodigoServico(new PacVarejo());


$xml = simplexml_load_string( $consulta->calcPreco() );
d( $xml );
echo "<hr>";

$xml = simplexml_load_string( $consulta->calcPrazo() );
d( $xml );
echo "<hr>";

$xml = simplexml_load_string( $consulta->calcPrecoPrazo() );
d( $xml );
echo "<hr>";
