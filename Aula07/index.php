<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUTA LIVRE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    require_once 'Lutador.php';
    require_once 'Luta.php';

 $l = [];
// Instanciar os lutadores com todos os parâmetros necessários
// __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
$l[0] = new Lutador("Danzin", "Brasil", 18, 1.72, 85, 99, 3, 1); // Peso Leve
$l[1] = new Lutador("Messi", "Argentina", 38, 1.70, 67, 14, 2, 3); // Peso Leve
$l[2] = new Lutador("C.Ronaldo", "Portugal", 41, 1.87, 83.5, 12, 2, 1); // Peso Médio
$l[3] = new Lutador("Neymar", "Brasil", 33, 1.75, 68, 13, 0, 2); // Peso Leve

$UFC01 = new Luta();
$UFC01->marcarLuta($l[0],$l[1]);
$UFC01->lutar();
$UFC02 = new Luta();
$UFC02->marcarLuta($l[1],$l[3]);
$UFC02->lutar();
$l[1]->status();
$l[3]->status();

    ?>
    
</body>
</html>