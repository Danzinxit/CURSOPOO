
<h1> Projeto Controle Remoto</h1>
<pre>
<?php 
require_once  'ControleRemoto.php';
$c = new ControleRemoto();
//So consigo alterar aquilo que esta na interface
$c->ligar();
$c->abrirMenu();
$c->maisVolume(22);
?>
</pre>