<pre>
<?php 
require_once 'caneta.php';

$c1 = new Caneta("GAY", "ROZA" , 20);
$c2 = new Caneta("CHUPA", "ROZA" , 20);
/* $c1->modelo = "BIC";   // ou $c1->setModelo("BiC");
$c1->setCor("Azul"); 
$c1->setPonta(0.5);// FAZER ASSIM $c1->ponta = 0.5; vai dar erro pois e privado
print"Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} e cor {$c1->getCor()}"; */
print_r($c1);
print_r($c2);




?>
</pre>