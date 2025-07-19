<?php 

abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
    private $experiencia;

    public function __construct($nome, $idade,$sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0; //comeca com zero
    }

    protected function ganharExp()
    {
        $this->experiencia++;

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
public function getExperincia(){
    return $this->experiencia;
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
public function setExperiencia($experiencia){
    $this->experiencia = $experiencia;
}



}


