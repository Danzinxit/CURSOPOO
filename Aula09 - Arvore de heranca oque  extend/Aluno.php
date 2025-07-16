<?php 
//HERANÇA DE DIFERENçA
require_once 'Pessoa.php';
class Aluno extends Pessoa{

private $matr, $curso;

//quando coloca final , ele nao pode ser sobreposto
//FINAL NAO PODE TER FILHO ENTAO E FOLHA
public  function PagarMensalidade(){
echo "Pgando mensalidade do aluno $this->nome"; //esta protegido por isso direto em nome , apenas o filho e mae pode acessar
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