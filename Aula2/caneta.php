<?php 
class Caneta{
         public $modelo;
         public $cor;
         private  $ponta;
         protected $carga;
         protected $tampada;

         public function rabiscar()
        {
        if($this->tampada == true){
            echo "Erro! Não posso rabiscar porque esta tampada seu otario";
        } else {
            echo "Estou rabiscando...";
        }
        }
        public function escrever()
        {

        }
//metodo publico pode dar acesso a um atributo protegido sim
       public function tampar(){
        $this->tampada = true;
    }

  public  function destampar(){
        $this->tampada = false;
    }

        



}


?>