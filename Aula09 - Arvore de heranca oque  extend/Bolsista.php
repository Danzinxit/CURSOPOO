<?php 
//ALUNO BOLSISTA
require_once 'Aluno.php';
//Bolsista vai ter tudo que aluno tem e como aluno extende pessoa entoa vai ter aluno e pessoa
class Bolsista extends Aluno{ // bOLSITA E FILHO DO ALUNO
private $bolsa;


public function RenovarBolsa(){
echo "Bolsa renovada";
}


public function getBolsa(){
return $this->bolsa;
}
public function setBolsa($bolsa){
$this->bolsa = $bolsa;
}

 public function PagarMensalidade(){//POLIFORMA ,POLIFORMO  , VAI SOBREPOR O OUTRO

        echo "$this->nome e Bolsista ! entao paga com desconto";
    }

}



?>