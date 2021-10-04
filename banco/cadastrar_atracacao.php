<?php
include('../../conexao_ln.php');



$valores['navio']     = filter_var($_POST['navio'], FILTER_SANITIZE_STRING);
$valores['imo']       = filter_var($_POST['imo'], FILTER_SANITIZE_STRING);
$valores['tipo']      = filter_var($_POST['tipo'], FILTER_SANITIZE_STRING);
$valores['ver_cad']   = filter_var($_POST['ver_cad'], FILTER_SANITIZE_STRING);
$valores['situacao']  = filter_var($_POST['situacao'], FILTER_SANITIZE_STRING);
$valores['eta']       = filter_var($_POST['eta'], FILTER_SANITIZE_STRING);
$valores['etb']       = filter_var($_POST['etb'], FILTER_SANITIZE_STRING);
$valores['ets']       = filter_var($_POST['ets'], FILTER_SANITIZE_STRING);
$valores['cargo']     = filter_var($_POST['cargo'], FILTER_SANITIZE_STRING);
$valores['agency']    = filter_var($_POST['agency'], FILTER_SANITIZE_STRING);
$valores['qtd']       = filter_var($_POST['qtd'], FILTER_SANITIZE_STRING);


class navio
{
    private $navio;
    private $imo;
    private $tipo;
    
    public function __construct($valores)
    {
        $this->navio = $valores['navio'];
        $this->imo = $valores['imo'];
        $this->tipo = $valores['tipo'];
    }
}

class atracacao
{
    private $navio;
    private $imo;
    private $situacao;
    private $eta;
    private $etb;
    private $ets;
    private $cargo;
    private $agency;
    private $qtd;

    
    public function __construct($con, $valores)
    {
        $this->navio = $valores['navio'];
        $this->imo = $valores['imo'];
        $this->situacao = $valores['situacao'];
        $this->eta = $valores['eta'];
        $this->etb = $valores['etb'];
        $this->ets = $valores['ets'];
        $this->cargo = $valores['cargo'];
        $this->agency = $valores['agency'];
        $this->qtd = $valores['qtd'];
    
        $query_cad = "call cadastro_navio(:navio, :situacao, :eta, :etb, :ets, :cargo,:agency,:qtd)";
    }
}


$navio = new navio($valores);


//$natracacao = new atracacao($con, $valores, $navio);
