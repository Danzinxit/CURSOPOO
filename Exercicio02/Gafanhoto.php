<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{

    private $login, $totAssistido;

     public function __construct($nome, $idade,$sexo, $login)
     {
        //parent e chamada da superclasse que seria pessoa
        parent::__construct($nome, $idade,$sexo);
       $this->login = $login;
       $this->totAssistido = 0;
     }













    public function viuMaisUm(){
        $this->totAssistido ++;
    }

    public function getLogin(){
        return $this->login;
    }
    public function getTotAssistindo(){
        return $this->$totAssistido;
    }

    public function setLogin($login){
        $this->login = $login;
    }
    public function setTotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;
    }









}






?>