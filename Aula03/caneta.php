<?php 

class Caneta{
    public $modelo;
    private $ponta;
    public $cor;
    private $tampada;

    //VOU CRIAR UM METODO CONSTRUTOR
                       //ou usar aqui : $modelo,$cor,$ponta   
    public function __construct($m, $c,$p){ //ou trocar construct pir Caneta
        $this->modelo = $m; //ou $modelo
        $this->ponta = $p;  //ou $ponta
        $this->cor = $c;   //ou $cor
        $this->tampar();
    }
    public function tampar(){
        $this->tampada =true;
    }
    function destampar(){
        $this->tampada = false;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;

    }

    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }

    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
}

?>