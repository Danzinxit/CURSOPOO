<pre>
<?php

require_once 'Video.php';
require_once 'AcoesVideo.php';
require_once 'Gafanhoto.php';
require_once 'Pessoa.php';

$v[0] = new Video("Increvel Mundo de Danzin ");
$v[1] = new Video("Inaaaaasds ", 4550, 20000, 5000, true);
$g = new Gafanhoto("Daniel" , 18, "M" , "Danzin");

$v[0]->setAvaliacao(2);
$v[0]->setViews(500);
$v[0]->setCurtidas(5200);
$v[0]->setReproduzindo(true);
$g->setExperiencia(22);
$g->setTotAssistido(5);

print_r($v);
print_r($g);



?>
</pre>