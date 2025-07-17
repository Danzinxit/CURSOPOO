<?php 
require_once 'Animal.php';

class Ave extends Animal{

private $corPena;

    //SOBREPOR O METODO DE ANIMAL
    public function locomover(){
        echo"Voando";
    }
     public function alimentar(){
        echo"Comendo Frutas";
    }
     public function emitirSom(){
        echo"Som de ave";
    }
    public function fazerNinho(){
        echo"Construiu um ninho";
    }
}


?>