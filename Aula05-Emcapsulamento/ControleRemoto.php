 <?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //EM CAPSULAMENTO E DEIXAR TODOS OS ATRIBUTOS PRIVADOS
       private  $volume;
       private  $ligado;
       private $tocando;

//get (Getter): Serve para obter ou ler o valor de um atributo. O nome vem do inglês "get", que significa "pegar" ou "obter".
//set (Setter): Serve para definir ou modificar o valor de um atributo. O nome vem do inglês "set", que significa "configurar
//Resumindo get e trazer e set e setar algo.

       public function __construct()
       {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->tocando = false;
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
        echo "Esta ligado?" . ($this->getLigado()?"SIM":"NÃO");
        echo "<br> Esta tocando" . ($this->getTocando()?"SIM":"NÃO");
        echo "<br> Volume: ". $this->getVolume();
        // para i = 0 ate getvolume() passo 10 fica escreva(
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo($this->getTocando());
       }
       public function fecharMenu()
       {
        echo "Fechando Menu";
       }
       public function maisVolume()
       {
        if ($this->getLigado())
        {    //set volume = getvolume
           $this->setVolume($this->getVolume() + 10);
        }else{
            echo "ERRO ! nao posso aumentar o volume";
        }
       }
       public function menosVolume()
       { //se a tv estiver desligada 
         if ($this->getLigado())
        {    //set volume = getvolume
            $this->setVolume($this->getVolume() + -5 );
        }
        else{
            echo"Erro nao posso diminuir o volume";
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
        if($this->getLigado() && !($this->getTocando()))
        {
            $this->setTocando(true);
        }
       }
       public function pause()
       {
        if($this->getLigado() && $this->getTocando() )
        {
            $this->setTocando(false);
        }
       }
       private function setVolume($v){
        $this->volume = $v;
       }
       private function getVolume(){
        return $this->volume;
       }
       private function setLigado($l)
       {
        $this->ligado = $l;
       }
       private function getLigado()
       {
        return $this->ligado;
       }
       private function setTocando($t)
       {
        $this->tocando = $t;
       }
       private function getTocando()
       {
        return $this->tocando;
       }
}



?>