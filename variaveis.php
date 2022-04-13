
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
#variavel do tipo string
$nome='Andrew de Oliveira Figueiredo';
#variavel do tipo int
$idade=20;
#variavel do tipo double ou float
$peso=62.5;
#var do tipo bolean
$fumante = true;#se for true aparece 1 no browser e se for false aparece vazio ou seja nada

print $nome;
?>
<h1>
    ficha cadastral
</h1>
<br/>
<p>nome:<?= $nome ?></p>
<p>idade:<?= $idade ?></p>
<p>peso:<?= $peso ?></p>
<p>fumante:<?= $fumante ?></p>

</body>

</html>


