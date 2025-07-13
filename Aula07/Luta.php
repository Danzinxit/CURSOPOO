<?php 
require_once 'Lutador.php';
class Luta{
    private ?Lutador $desafiado; //estou instanciando de outra classe
    private ?Lutador $desafiante;
   private ?Lutador $adesafiada;
    private $rounds;
    private $aprovada;

 // 1. Os lutadores devem ser da mesma categoria.
        // 2. Um lutador não pode lutar contra si mesmo.
public function marcarLuta(?Lutador $l1 , $l2, $l3){
    //Tres igual e igual e do mesmo tipo
    if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2 && $l1 != $l3){ //o <> seria o != para ser diferente
 $this->aprovada = true;
 $this->desafiado = $l1;
 $this->desafiante = $l2;
 $this->adesafiada = $l3;
    }
    else{ //SE NAO ROLAR A LUTA :
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiada = null;
    }

}
public function lutar(){  //Aqui e para definir vencedor e perdedor
    if($this->aprovada){
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
       $vencedor = rand(0,2);//rad e um numero aleatorio entre 0 e 2
       switch($vencedor)
       {
        case 0: 
            echo "Empatou a merda da luta";
            $this->desafiado->empatarLuta();
            $this->desafiante->empatarLuta();
            break; //break para sair do switch
          case 1:
            echo "Quem venceu a Luta foi o :",
             $this->desafiado->getNome();
            $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();
            break;
          case 2://Ganhou o Desafiante
              echo 
              "Venceu a Luta o :",
              $this->desafiante->getNome();
               $this->desafiante->ganharLuta();
               $this->desafiado->perderLuta();
                break;
                case 3:  echo 
              "mulher:",
              $this->adesafiada->getNome();
               $this->desafiante->ganharLuta();
               $this->adesafiada->perderLuta();
               break;
               echo "mulheraa:",
                $this->adesafiada->getNome();
            $this->adesafiada->ganharLuta();
            $this->desafiante->perderLuta();
               break;
                
       }
    }else 
       { 
           echo"Luta nao pode acontecer";
       }

}

public function setDesafiado(Lutador $dd){
     $this->desafiado = $dd;
}
public function setDesafiante(Lutador $de){
     $this->desafiante = $de;
}
public function setRounds($r){
     $this->round = $r;
}
public function setAprovada($a){
 $this->aprovada = $a;
}
public function setAdesafiada(Lutador $ad){
     $this->adesafiada = $ad;
}

public function getDesafiado() {
    return $this->desafiado;

}
public function getDesafiante() {
    return $this->desafiante;

}
public function getRound() {
    return $this->rounds;

}
public function getAprovada() {
    return $this->aprovada;

}




}




?>