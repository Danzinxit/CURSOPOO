<?php 
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{

private
 $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

 public function __construct($titulo, $autor, $totPaginas, Pessoa $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }

public function detalhes(){
echo "<hr>";
        echo "Livro: " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Páginas: " . $this->totPaginas . ", página atual: " . $this->pagAtual;
        echo "<br>Sendo lido por: " . $this->leitor->getNome();//puxou leitor de livro e nome de pessoa
        echo "<br>Aberto: " . ($this->aberto ? "Sim" : "Não");
        echo "<hr>";
}

public function abrir(){
    $this->aberto = true;
}

public function fechar(){
    $this->aberto = false;
}

public function folhear($p)
{
    if ($this->aberto) {
        if($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
}

public function avancarPag(){
    
        $this->pagAtual++;
    
}

public function voltarPag(){
    $this->pagAtual -1;
}

 public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }

    public function setLeitor(Pessoa $leitor){
        $this->leitor = $leitor;
    }
}





?>