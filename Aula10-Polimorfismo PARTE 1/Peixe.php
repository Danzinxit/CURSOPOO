<?php 
require_once 'Animal.php';

class Peixe extends Animal{
private $corEscama;

//SOBREPOR O METODO DE ANIMAL
    public function locomover(){
        echo"Nadando";
    }
     public function alimentar(){
        echo"Comendo substancias";
    }
     public function emitirSom(){
        echo"Nao faz";
    }
    public function soltaBolha(){
        echo"Soltou uma bolha";
    }
    
}


?>