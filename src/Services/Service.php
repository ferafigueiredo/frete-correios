<?php
/**
 * Created by PhpStorm.
 * User: ferafigueiredo
 * Date: 06/03/17
 * Time: 22:17
 */

namespace FreteCorreios\Services;


use FreteCorreios\Helpers\CodigoServico\CodigoServico;
use FreteCorreios\Helpers\FormatoEncomenda\FormatoEncomenda;

abstract class Service
{
    protected $nCdEmresa;
    protected $sDsSenha;
    protected $nCdServico;
    protected $sCepOrigem;
    protected $sCepDestino;
    protected $nVlPeso;
    protected $nCdFormato;
    protected $nVlComprimento;
    protected $nVlAltura;
    protected $nVlLargura;
    protected $nVlDiametro;
    protected $sCdMaoPropria;
    protected $nVlValorDeclarado;
    protected $sCdAvisoRecebimento;
    protected $strRetorno;
    protected $nIndicaCalculo;

    public abstract function calcPrecoPrazo();

    public abstract function calcPreco();

    public abstract function calcPrazo();

    /*
     * Constructor
     */

    function __construct()
    {
        $this->nCdEmresa = "";
        $this->sDsSenha = "";
        $this->nCdServico = "";
        $this->sCepOrigem = "";
        $this->sCepDestino = "";
        $this->nVlPeso = 0;
        $this->nCdFormato = "";
        $this->nVlComprimento = "";
        $this->nVlAltura = 0;
        $this->nVlLargura = 0;
        $this->nVlDiametro = 0;
        $this->sCdMaoPropria = "N";
        $this->nVlValorDeclarado = 0;
        $this->sCdAvisoRecebimento = "N";
        $this->strRetorno = "XML";
        $this->nIndicaCalculo = "";
    }

    /*
     * Setters
     */
    public function setCodigoEmpresa($codigoEmpresa)
    {
        $this->nCdEmresa = $codigoEmpresa;
    }

    public function setSenhaEmpresa($senha)
    {
        $this->sDsSenha = $senha;
    }

    public function setCodigoServico(CodigoServico $codigoServico)
    {
        $this->nCdServico = $codigoServico->getCodigo();
    }

    public function setCepOrigem($cepOrigem)
    {
        $this->sCepOrigem = $cepOrigem;
    }

    public function setCepDestino($cepDestino)
    {
        $this->sCepDestino = $cepDestino;
    }

    public function setPeso($peso)
    {
        $this->nVlPeso = $peso;
    }

    public function setCodigoFormato (FormatoEncomenda $codigoFormato){
         $this->nCdFormato = $codigoFormato->getCodigo();
    }

    public function setComprimento ($comprimento){
         $this->nVlComprimento = $comprimento;
    }

    public function setAltura ($altura){
         $this->nVlAltura = $altura;
    }

    public function setLargura ($largura){
         $this->nVlLargura = $largura;
    }

    public function setDiametro ($diametro){
         $this->nVlDiametro = $diametro;
    }

    public function setMaoPropria (\SplBool $maoPropria){
         $this->sCdMaoPropria = $maoPropria ? 'S' : 'N';
    }

    public function setValorDeclarado ($valorDeclarado){
         $this->nVlValorDeclarado = $valorDeclarado;
    }

    public function setAvisoRecebimento (\SplBool $avisoRecebimento){
         $this->sCdAvisoRecebimento = $avisoRecebimento ? 'S' : 'N';
    }

    public function setRetorno ($retorno){
         $this->strRetorno = $retorno;
    }

    public function setIndicadorCalculo ($indicadorCalculo){
         $this->nIndicaCalculo = $indicadorCalculo;
    }

}