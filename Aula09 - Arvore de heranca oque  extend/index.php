<pre>
<?php 
require_once 'Pessoa.php';
require_once 'Visitante.php';
require_once 'Professor.php';
require_once 'Aluno.php';
require_once 'Bolsista.php';
require_once 'Tecnico.php';


//$p1 = new Pessoa(); //NAO FUNCIONA
$a1 = new Aluno();
$p1 = new Professor();
$v1 = new Visitante();
$b1= new Bolsista();
$t1 = new Tecnico();

$v1->setNome("Daniel");
$p1->setNome("Julio");
$a1->setNome("Silva");
$b1->setNome("Otario");
$p1->setNome("Daniel222");

$v1->setSexo("M");
$p1->setSexo("M");
$a1->setSexo("F");
$b1->setSexo("M");
$t1->setSexo("M");

$b1->setIdade(55);
$v1->setIdade(38);
$p1->setIdade(58);
$a1->setIdade(28);
$a1->setCurso("Informatica");
$a1->PagarMensalidade();
$b1->RenovarBolsa();
$b1->PagarMensalidade();
$p1->setSalario(2220);
$p1->receberAumento(550);
$t1->praticar();


print_r($v1);
print_r($p1);
print_r($a1);
print_r($b1);
print_r($t1);
?>
</pre>