<pre>
<?php
require_once "Animal.php";
require_once 'Mamifero.php';
require_once 'FIlhasMamiferos.php';


$c =new Cachorro();
$c->emitirSom();
$c->reagirFrase("ola");
$c->reagirFrase("VAI APANHAR");
$c->reagirHora(11, 00);
$c->reagirHora(19,00);
$c->reagirDono(true);
$c->reagirDono(false);
$c->reagirIdadePeso(2, 2.15);
$c->reagirIdadePeso(17, 4.5);

print_r($c);


?>
</pre>