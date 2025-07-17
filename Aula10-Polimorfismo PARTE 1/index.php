
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>
<body>

<pre>
<?php 
require_once 'Ave.php';
require_once 'Animal.php';
require_once 'Mamifero.php';
require_once 'Peixe.php';
require_once 'Reptil.php';
require_once 'Filhosdosfilhos.php';

$m = new Mamifero;
$p = new Peixe;
$a = new Ave;
$r = new Reptil;
$c = new Canguru;
$ca = new Cachorro;
$co = new Cobra;
$t = new Tartaruga;
$g = new Goldfish;
$ar = new Arara;


$m->setPeso(85.3);
$p->setPeso(66);
$a->setPeso(88);
$r->setPeso(100);
$c->setPeso(44);
$ca->setPeso(999);


$a->fazerNinho();
$a->emitirSom();

$m->setCorPelo("Roza");

print_r($m);
print_r($p);
print_r($a);
print_r($r);
print_r($c);
print_r($ca);
print_r($co);
print_r($t);
print_r($g);
print_r($ar);

?>
</pre>
</body>
</html>