<?php 
//classe
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    var $escrever;

    //metodo
    function rabiscar(){
/*         O Significado de $this Em Programação Orientada a Objetos (POO) com PHP, a variável especial $this é usada dentro de uma classe para se referir ao objeto atual. Pense na sua classe Caneta como uma "planta" ou um "molde" para criar canetas. Cada caneta que você cria é um objeto (ou uma instância) dessa classe. */
        //AQUI SERIA C1->TAMPADA do instaciamento do INDEX.PHP
        if($this->tampada == true){
            echo "Erro! Não posso rabiscar porque esta tampada seu otario";
        } else {
            echo "Estou rabiscando...";
        }
    }
    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }


    function modelo(){
       if ($this->modelo == "FIAT"){
        echo "E UM UNO TOP";
       }
       else {
        echo "nao e um no";
    }
    }
    
    function escrevendo(){
        if( $this->escrever == true)
       {
        echo "Estou escrevendo buceta";
       }
       else{
        echo "ME da o cu";
       }
    }

}



?>