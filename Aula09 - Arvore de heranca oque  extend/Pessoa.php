<?php
//Classe Mãe 
//Classe abstrata , nao pode gerar objetos ,tipo p1 = new Pessoa, somente usada em herança
abstract class Pessoa{
protected $nome,$idade, $sexo;


public final function fazerAniv(){
$this->idade ++;
}


public function getNome(){
return $this->nome;
}
public function getIdade(){
return $this->idade;
}
public function getSexo(){
return $this->sexo;
}

public function setNome($nome){
$this->nome = $nome;
}
public function setIdade($idade){
$this->idade = $idade;
}
public function setSexo($sexo){
$this->sexo = $sexo;
}




}



?>
