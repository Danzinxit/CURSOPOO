<?php 
require_once 'Aluno.php';
//Bolsista vai ter tudo que aluno tem e como aluno extende pessoa entoa vai ter aluno e pessoa
class Bolsista extends Aluno{
private $bolsa;


public function RenovarBolsa(){

}


public function getBolsa(){
return $this->bolsa;
}
public function setBolsa($bolsa){
$this->bolsa = $bolsa;
}

 public function PagarMensalidade(){//POLIFORMA ,POLIFORMO
        echo "<p>Verificando status do bolsista... OK.</p>";
        // Agora, chama o método PagarMensalidade() original da classe Aluno
        parent::PagarMensalidade();
    }

}



?>