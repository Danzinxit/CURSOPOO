
<h1> Projeto UFC</h1>
<pre>
<?php 
require_once  'Lutador.php';

//TUDO ISSO PUXA DO METODO CONSTRUTOR DO LUTADOR.PHP

// Criar um array para guardar os lutadores
$l = [];

// Instanciar os lutadores com todos os parâmetros necessários
// __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
$l[0] = new Lutador("Danzin", "Brasil", 18, 1.72, 85, 99, 3, 1); // Peso Leve
$l[1] = new Lutador("Messi", "Argentina", 38, 1.70, 67, 14, 2, 3); // Peso Leve
$l[2] = new Lutador("C.Ronaldo", "Portugal", 41, 1.87, 83.5, 12, 2, 1); // Peso Médio
$l[3] = new Lutador("Neymar", "Brasil", 33, 1.75, 68, 13, 0, 2); // Peso Leve

echo "<h2>Status Inicial do Messi</h2>";
$l[1]->status();

echo "<h2>--- Ações da Luta ---</h2>";
echo "<p>Messi ganhou uma luta...</p>";
$l[1]->ganharLuta();

echo "<p>Messi perdeu duas lutas...</p>";
$l[1]->perderLuta();
$l[1]->perderLuta();

echo "<p>Danzin empatou uma luta...</p>";
$l[0]->empatarLuta();

echo "<h2>Status Final e Atualizado do Messi</h2>";
$l[1]->apresentar(); // Exibindo o status completo após as alterações
?>
</pre>