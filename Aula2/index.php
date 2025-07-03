<pre>
<?php 
 require_once 'caneta.php';
    $c1= new Caneta;
    $c1->modelo = "bic cristal";
    $c1->cor = "Azul";

 
      print_r($c1);
        $c1->rabiscar();
    //o c1 e o this
    $c1->destampar(); // ou //c1->tampar();
    print_r($c1);
    echo "<br>";
    
    echo "<br>";
    
    echo"<br>";

    $c2= new Caneta;
    $c2->cor = "Vermelha";
    $c2->ponta = 1.9;
    $c2->tampada = true;
    $c2->carga = 90;
    $c2->tampar();
    print_r($c2);


?>
</pre>