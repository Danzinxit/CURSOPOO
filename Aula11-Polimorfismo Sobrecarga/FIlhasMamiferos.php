<?php
require_once 'Animal.php';
require_once 'Mamifero.php';
    class Lobo extends Mamifero
    {
        public function emitirSom()
        //SOBREPOSICOES DE MAMIFERO
        {
            echo"AUUUUUUUUUUU";
        }
    }
    class Cachorro extends Lobo{
         //SOBREPOSICOES DE MAMIFERO
        public function emitirSom()
        {
            echo"AUUauauaau";
        }
        // Em PHP, não é possível ter dois ou mais métodos com o mesmo nome (sobrecarga de método).
        // A última declaração do método 'reagir' sobrescreveria a primeira.
        // A forma correta é criar métodos com nomes diferentes para cada tipo de reação.

        public function reagirFrase($frase)
        {
            // Corrigido: Usar '==' para comparação, não '=' que é para atribuição.
            if ($frase == "toma comida" || $frase == "Ola" || $frase == "Saudações") {
                echo "Abanar O RABITO <br>";
            }
            elseif($frase == "VAI APANHAR"){
                echo "MORDER <br>";
            }    
             else {
                echo "Rosnar <br>";
            }
        }

        public function reagirHora($hora, $min) // tem que colocar 12,00 exemplo
        {
         if($hora<12){
            echo "Abanar <br>";

         }
         elseif($hora>=18){
            echo("Ignorar");
         }
         else{
            echo "Abanar e latir";
         }

        }
        public function reagirDono($dono){
            if($dono == true){
                echo "Abanar";
            }
            else {
                echo "Rosnar e Latir";
            }
        }
        public function reagirIdadePeso($idade, $peso)
        {
            if($idade<5){
                if($peso<10){
                    echo "Abanar";
                }
                else{
                    echo "Latir";
                }
                }
                elseif ($peso<10){
                    echo "Rosnar";
                }
                else {
                    echo "Ignorar";
                }
            }

        }
?>
