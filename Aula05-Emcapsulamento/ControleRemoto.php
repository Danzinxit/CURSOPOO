<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador{

       private int $volume;
       private  $ligado;
       private $tocando;

//get (Getter): Serve para obter ou ler o valor de um atributo. O nome vem do inglês "get", que significa "pegar" ou "obter".
//set (Setter): Serve para definir ou modificar o valor de um atributo. O nome vem do inglês "set", que significa "configurar
//Resumindo get e trazer e set e setar algo.

       public function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
       }
       public function ligar()
       {
        $this->setLigado(true);
        
       }
       public function desligar()
       {
        $this->setLigado(false);
       }
       public function abrirMenu()
       {
        echo "Esta ligado" . $this->getLigado();
        echo "Tem volume" . $this->getVolume();
        // para i = 0 ate getvolume() passo 10 fica escreva(
        for ($i = 0; $i <= $this->getVolume(); $i += 10);
        echo "|";
        echo($this->getTocando());
       }
       public function fecharMenu()
       {
        echo ("Fechando Menu");
       }
       public function maisVolume()
       {
        if ($this->getLigado())
        {    //set volume = getvolume
           $this->setVolume($this->getVolume() + 1);
        }
       }
       public function menosVolume()
       { //se a tv estiver desligada 
         if ($this->getLigado())
        {    //set volume = getvolume
            $this->setVolume($this->getVolume() + -1);
        }
       }
       public function ligarMudo()
       {
        //so vai colocar dar mudo se estiver ligado e volume acima de zero
        if ($this->getLigado() && $this->getVolume() > 0)
        {
            $this->setVolume(0);
        }
       }
       public function desligarMudo()
       {
        if ($this->getLigado() && $this->getVolume() == 0)
        {
            $this->setVolume(50);
        }
       }
       public function play()
       { // O ! significa nao ou fazer !=
        if($this->getLigado() && !$this->getTocando())
        {
            $this->setTocando(verdadeiro);
        }

       }
       public function pause()
       {
        if($this->getLigado() && $this->getTocando() )
        {
            $this->setTocando(false);
        }
       }
       public function setVolume($v){
        $this->volume = $v;
       }
       public function getVolume(){
        return $this->volume;
       }

       public function setLigado($l)
       {
        $this->ligado = $l;
       }
       public function getLigado()
       {
        return $this->ligado;
       }
       public function setTocando($t)
       {
        $this->tocando = $t;
       }
       public function getTocando()
       {
        return $this->tocando;
       }









}



?>