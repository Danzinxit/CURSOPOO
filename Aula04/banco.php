<?php 
class ContaBanco{
    public  $numconta;
    protected $tipo;
    private $dono;
    private int $saldo;
    private  $status ;


    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC")
        {
         $this->saldo = 50; //ou setSaldo(50)
        }
         else if($t == "CP")
         {
            $this->saldo = 150;
         }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0)
        {
            echo"A conta tem dinheiro";
        }
        else if($this->getSaldo() < 0)
        {
            echo "CONTA EM DEBITO";
        }
        else
        {
            $this->setStatus(false);
            echo"Conta de " . $this->getDono() . " fechada com sucesso";
        }
    }
    public function depositar($v){
        if($this->getStatus() == true ) // ou getstatus() = true
        {   //parenteses sao igual a =
            $this->setSaldo($this->getSaldo()+$v); //OU $this->saldo = $this->saldo + $v
            echo"Deposito de R$ $v na conta de  " . $this->getDono();
        }
        else
        {
            echo "Impossivel depositar";
        }

    }
    public function sacar($v){
        if($status = true) // ou this->getStatus()
        {
          if($this->saldo >= $v)
          { 
            $this->saldo = $this->saldo - $v; //ou $this->setSaldo($this->getSaldo() - $v) QUE SIGNIFICA MODIFICA O SALDO O SET
            echo"SAQUE de R$$v AUTORIZADO NA CONTA DA " . $this->getDono();
          }
         else
          {
            echo "Saldo Insuficiente";
          } 
        }
         else
        {
           echo "Impossivel sacar";
        }  
        }

    public function pagarMensal()
    {
        if($this->getTipo() == "CC" )
        {
            $v = 12;
        }
        else if ($this->getTipo() == "CP")
        {
            $v =  20;
        }
        if($this->getStatus()) { //ou $this->status = true
            $this->setSaldo ( $this->getSaldo() - $v);
            echo "Mensalidae de R$ $v debitada na conta de " . $this->getDono();
         }
         else
         {
            echo "Problemas com a conta";
         }
    }

    public function __construct()
    {
        $this->setSaldo(0); 
        $this->setStatus(false);
        echo"Conta criada com sucesso";
    }

    public function getnumConta(){
      return $this->numconta;
    }
    public function setnumConta($n){
       $this->numconta = $n;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t)
    {
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;

    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;

    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

}




?>