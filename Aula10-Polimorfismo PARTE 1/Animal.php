<?php 
abstract class  Animal{
protected $peso, $idade, $membros;

public abstract function  locomover();
public abstract function  alimentar();
public abstract function  emitirSom();

/* Inicialização do objeto: Imagine que você tem uma classe Carro. Quando você cria um novo carro ($meuCarro = new Carro();), você precisa definir atributos como cor, modelo, ano, etc. O construtor permite que você faça isso de forma organizada e em um único lugar, garantindo que todo carro criado comece com valores válidos.

Obrigatoriedade de valores: Você pode tornar alguns atributos obrigatórios para a criação do objeto. Por exemplo, se todo carro precisa ter um modelo, você pode definir o construtor para receber o modelo como parâmetro:

Encapsulamento: O construtor ajuda a manter o encapsulamento, um dos princípios da POO. Ele permite controlar como os atributos são inicializados, garantindo que o objeto comece em um estado consistente e válido. Você pode adicionar lógica dentro do construtor para validar os valores recebidos e garantir que os atributos sempre tenham valores significativos. */

/* public function __construct($m, $c,$p){ //ou trocar construct pir Caneta
        $this->modelo = $m; //ou $modelo
        $this->ponta = $p;  //ou $ponta
        $this->cor = $c;   //ou $cor
        $this->tampar();
    }
 */

/*   public function __construct()
       {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->tocando = false;
       } */


public function getPeso(){
    return $this->peso;
}
public function getIdade(){
    return $this->idade;
}
public function getMembros(){
    return $this->membros;
}

public function setPeso($peso){
    $this->peso = $peso;
}
public function setIdade($idade){
    $this->idade = $idade;
}
public function setMembros($membros){
    $this->membros = $membros;
}

}
?>