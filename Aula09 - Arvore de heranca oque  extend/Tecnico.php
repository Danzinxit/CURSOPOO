<?php 
require_once 'Pessoa.php';
class Tecnico extends Pessoa{


    private $registroProfissional;

public function praticar(){
echo "$this->nome esta praticando";
}

public function getRegistroProfissional(){
    return $this->registroProfissional;
}
public function setRegistroProfissional($registroProfissional)
{
$this->registroProfissional = $registroProfissional;
}

}

?>