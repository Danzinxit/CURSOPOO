<?php 
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias , $derrotas , $empates;


    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this->nome= $no;
        $this->nacionalide= $na;
        $this->idade= $id;
        $this->altura= $al;
        $this->setPeso($pe);
        $this->vitorias= $vi;
        $this->derrotas= $de;
        $this->empates= $em;
    }
   

public function apresentar(){
  echo"Lutador:" . $this->getNome();
  echo "Nacionalidade do lutador e :" . $this->getNacionalidade();
  echo $this->getIdade() . "Anos";
  echo $this->getAltura() . "Altura";
  echo "Pesando :" . $this->getPeso();
  echo "Ganhou:" . $this->getVitorias();
  echo"Derrotas:" . $this->getDerrotas();
  echo"Empatou:" . $this->getEmpates();
}
public function status(){
    echo $this->getNome();
    echo "e um peso de " . $this->getPeso();
    echo $this->getVitorias() ."Vitorias " ;
    echo $this->getDerrotas() . "Derrotas " ;
    echo $this->getEmpates(). "Empates " ;
}
public function ganharLuta(){
  $this->setVitorias($this->getVitorias()+ 1);
}
public function perderLuta(){
 $this->setDerrotas($this->getDerrotas() + 1);
}
public function empatarLuta(){
    $this->setEmpates($this->getEmpates()+ 1);
}


public function getNome(){
  return $this->nome;
}
public function getNacionalidade(){
return $this->nacionalidade;
}
function getIdade(){
return $this->idade;
}
function getAltura(){
return $this->altura;
}
function getPeso(){
return $this->peso;
}
function getCategoria(){
return $this->categoria;
}
function getVitorias(){
return $this->vitorias;
}
function getDerrotas(){
return $this->derrotas;
}
function getEmpates(){
return $this->empates;
}

public function setNome($nome) {
    $this->nome = $nome;
}

public function setNacionalidade($nacionalidade) {
     $this->nacionalidade = $nacionalidade;
  }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();  //sempre que configurar o peso , configura a categoria
    }

    private function setCategoria($categorias) {
        if($this->peso< 52.2)
        {
            $this->categoria = "Invalido";
        }
        else if($this->peso<= 70.3 ){
            $this->categoria = "Leve";
        }
        else if ($this->peso <= 83.9) {
            $this->categoria = "Média";
        }
        else if($this->peso <= 120.2){
            $this->categoria = "Pesada";
        }
        else {
            $this->categoria = "Ivalidooo";
        }
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }



}

?>