<?php 
require_once 'Ave.php';
require_once 'Animal.php';
require_once 'Mamifero.php';
require_once 'Peixe.php';
require_once 'Reptil.php';

class Canguru extends Mamifero{
public function usarBolsa(){
    echo"Usando bolsa";
}
public function locomover(){
    echo"Saltando";
}
}
class Cachorro extends Mamifero{
public function enterrarOsso(){
    echo "Enterrando Osso";
}
  public function emitirSom(){
        echo"AU AU AU AU";
    }
}
class Cobra extends Reptil{

}
class Tartaruga extends Reptil{
public function locomover(){
    echo"Andando beeem devagar";
}
}
class Goldfish extends Peixe{

}
class Arara extends Ave{

}






?>