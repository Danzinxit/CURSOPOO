<?php 

require_once 'Pessoa.php';
class Professor extends Pessoa{

private $especialidade , $salario ;


public function receberAumento($aumento){

$this->salario += $aumento;

}

public function setSalario($salario){
$this->salario = $salario;
}
public function setEspecialidade($especialidade){
$this->especialidade = $especialidade;
}

public function getSlario(){
    return $this->salario;
}
public function getEspecialidade(){
    return $this->especialidade;
}

}





?>