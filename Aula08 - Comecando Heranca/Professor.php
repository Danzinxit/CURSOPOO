<?php 

require_once 'Pessoa.php';
class Professor extends Pessoa{

private $especialidade, $salario;



public function receberAum($aumento){
$this->salario += $aumento;  //O problema está no método receberAum na classe Professor. A linha $this->salario + $aumento; calcula a soma, mas não atribui o resultado de volta à propriedade $salario.
}

    public function getEspecialidade(){
return $this->especialidade;
}
public function getSalario(){
return $this->salario;
}

public function setEspecialidade($especialidade){
$this->especialidade = $especialidade;
}
public function setSalario($salario){
$this->salario = $salario;
}



}



?>