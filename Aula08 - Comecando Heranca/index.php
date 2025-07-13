<pre>
<?php 
require_once 'Pessoa.php';
require_once 'Funcionario.php';
require_once 'Professor.php';
require_once 'Aluno.php';


$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();


$p1->setNome("Daniel");
$p2->setNome("Julio");
$p3->setNome("Silva");
$p4->setNome("Otario");

$p1->setSexo("M");
$p2->setSexo("M");
$p3->setSexo("F");
$p4->setSexo("M");


$p1->setIdade(38);
$p2->setIdade(58);
$p3->setIdade(28);
$p2->setCurso("Informatica");
$p3->setSalario(2220);


$p3->receberAum(550);
$p4->mudarTrabalho();
$p2->cancelarMatr();




print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>
</pre>