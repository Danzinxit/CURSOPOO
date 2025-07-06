<pre>
<?php 
require_once 'banco.php';

$p1 = new ContaBanco();
echo "<br>";
$p2 = new ContaBanco();
$p1->abrirConta("CC");
$p1->setDono("Daniel");
$p1->setnumConta(777);
$p2->abrirConta("CP");
$p2->setDono("CHUPA E DA");
$p2->setnumConta(69);
echo "<br>";
$p1->depositar(300);
echo "<br>";
$p2->depositar(500);
echo "<br>";
$p1->sacar(338);
echo "<br>";
$p2->sacar(500);
echo "<br>";
$p1->pagarMensal();
echo "<br>";
$p2->pagarMensal();
echo "<br>";
$p1->fecharConta();
echo "<br>";
$p2->fecharConta();
echo "<br>";
print_r($p1);
print_r($p2);
?>
</pre>
