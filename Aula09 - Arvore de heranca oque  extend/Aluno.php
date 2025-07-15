<?php 
//HERANÇA DE DIFERENA
require_once 'Pessoa.php';
class Aluno extends Pessoa{

private $matr, $curso;

public function PagarMensalidade(){
echo "mensalidade paga";
}


public function getMatr(){
    return $this->matr;
}
public function getCurso(){
    return $this->curso;
}

public function setMatr($matr){
$this->matr = $matr;
}
public function setCurso($curso){
$this->curso = $curso;
}

}
?>