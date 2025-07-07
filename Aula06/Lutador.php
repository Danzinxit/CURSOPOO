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
        $this->nacionalidade= $na;
        $this->idade= $id;
        $this->altura= $al;
        $this->setPeso($pe);
        $this->vitorias= $vi;
        $this->derrotas= $de;
        $this->empates= $em;
    }

    public function apresentar(){
        echo "<p>----------------------------------</p>";
        echo "CHEGOU A HORA! Apresentando o lutador: " . $this->getNome() . "<br>";
        echo "Diretamente de: " . $this->getNacionalidade() . "<br>";
        echo "Com " . $this->getIdade() . " anos e " . $this->getAltura() . "m de altura<br>";
        echo "Pesando " . $this->getPeso() . "Kg<br>";
        echo "Categoria: " . $this->getCategoria() . "<br>";
        echo "Ganhou: " . $this->getVitorias() . " lutas<br>";
        echo "Perdeu: " . $this->getDerrotas() . " lutas<br>";
        echo "Empatou: " . $this->getEmpates() . " lutas<br>";
    }
    public function status(){
        echo "<p>--- STATUS ---</p>";
        echo $this->getNome() . " é um peso " . $this->getCategoria() . "<br>";
        echo "Vitórias: " . $this->getVitorias() . "<br>";
        echo "Derrotas: " . $this->getDerrotas() . "<br>";
        echo "Empates: " . $this->getEmpates() . "<br>";
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

    private function setCategoria() {
        if($this->peso < 52.2)
        {
            $this->categoria = "Invalido";
        }
        elseif($this->peso<= 70.3 ){
            $this->categoria = "Leve";
        }
        elseif ($this->peso <= 83.9) {
            $this->categoria = "Média";
        }
        elseif($this->peso <= 120.2){
            $this->categoria = "Pesada";
        }
        else {
            $this->categoria = "Inválido";
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