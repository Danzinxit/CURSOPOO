<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php 
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    // Cria as pessoas (leitores)
    $p = [];
    $p[0] = new Pessoa("Danzin", 18, "M");
    $p[1] = new Pessoa("Maria", 25, "F");

    // Cria os livros, passando os 4 argumentos necessários
    $l = [];
    $l[0] = new Livro("Aprendendo POO em PHP", "Gustavo Guanabara", 300, $p[0]);
    $l[1] = new Livro("ssss", "Douglas Adams", 208, $p[1]);

    // Interage com o livro
    $l[0]->abrir(); // O método abrir() não precisa de parâmetros
    $l[0]->folhear(100);
    $l[0]->avancarPag();
    $l[0]->voltarPag();
    // Mostra os detalhes
    $l[0]->detalhes();
    $l[1]->detalhes();
    $l[0]->folhear(51);

    print_r($l[0]);
    ?>
</pre>
</body>
</html>