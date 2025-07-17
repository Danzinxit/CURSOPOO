<?php 
require_once 'Ave.php';
require_once 'Animal.php';
require_once 'Mamifero.php';
require_once 'Peixe.php';
require_once 'Reptil.php';

$m = new Mamifero;
$p = new Peixe;
$a = new Ave;
$r = new Reptil;

$m->setPeso(85.3);

$a->fazerNinho();
$a->emitirSom();
?>