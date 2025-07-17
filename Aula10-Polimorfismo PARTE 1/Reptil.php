<?php 
require_once 'Animal.php';

class Reptil extends Animal{
private $corEscam;

    //SOBREPOR O METODO DE ANIMAL
    public function locomover(){
        echo"Rastejando";
    }
     public function alimentar(){
        echo"Comendo Vegetais";
    }
     public function emitirSom(){
        echo"Som de Reptil";
    }
    
}


?>