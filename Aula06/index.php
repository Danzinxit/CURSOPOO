
<h1> Projeto UFC</h1>
<pre>
<?php 
require_once  'Lutador.php';

//TUDO ISSO PUXA DO METODO CONSTRUTOR DO LUTADOR.PHP

// Criar um array para guardar os lutadores
$l = [];

// Instanciar os lutadores com todos os parâmetros necessários
// __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
$l[0] = new Lutador("Danzin", "Brasil", 31, 1.75, 68.9, 11, 3, 1);
$l[1] = new Lutador("Messi", "Argentina", 29, 1.68, 57.8, 14, 2, 3);
$l[2] = new Lutador("C.Ronaldo", "Portugal", 35, 1.65, 80.9, 12, 2, 1);
$l[3] = new Lutador("Neymar", "Brasil", 28, 1.93, 81.6, 13, 0, 2);

// Exemplo de como usar os métodos
$l[0]->apresentar();
$l[2]->status();
$l[3]->getCategoria();
$l[1]->ganharLuta();
$l[0]->empatarLuta();

?>
</pre>