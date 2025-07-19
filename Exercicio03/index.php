<pre>
<?php

require_once 'Video.php';
require_once 'AcoesVideo.php';
require_once 'Gafanhoto.php';
require_once 'Pessoa.php';
require_once 'Visualizacao.php';

$v[0] = new Video("Increvel Mundo de Danzin ");
$v[1] = new Video("Inaaaaasds ");
$g[0] = new Gafanhoto("Daniel" , 18, "M" , "Danzin");


$views[0] = new Visualizacao($g[0], $v[0]); //espectador e filme
$views[1] = new Visualizacao($g[0], $v[1]); //espectador e filme

$views[0]->avaliar();
$views[1]->avaliarPorc(80);

print_r($views);


?>
</pre>