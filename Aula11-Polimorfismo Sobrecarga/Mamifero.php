<?php 
require_once 'Animal.php';

class Mamifero extends Animal{
    private $corPelo;

//SOBREPOR O METODO DE ANIMAL
    public function locomover(){
        echo"Correndo";
    }
     public function alimentar(){
        echo"Mamando";
    }
     public function emitirSom(){
        echo"Som de mamifero";
    }

    public function getCorPelo(){
        return $this->corPelo;
    }
    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
    
}



?>