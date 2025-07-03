<title>ME CHUPA</title>


//INSTANCIAR AS CLASSES
    <?php 
    require_once 'caneta.php';
//INSTANCIAR A CLASSE
    $c1= new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;
    $c1->modelo = "FIAT";
    $c1->escrever = true;
    
    //o c1 e o this
    $c1->destampar(); // ou //c1->tampar();
    print_r($c1);
    echo "<br>";
    $c1->rabiscar();
    echo "<br>";
    $c1->modelo();  
     echo"<br>";
    $c1->escrevendo();
    
    echo"<br>";

    $c2= new Caneta;
    $c2->cor = "Vermelha";
    $c2->ponta = 1.9;
    $c2->tampada = true;
    $c2->carga = 90;
    $c2->tampar();
    print_r($c2);

    ?>
    
