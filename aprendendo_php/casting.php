<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
#gettype()= retorna o tipo da variavel
// vamos declarar uma variavel do tipo inteiro para ver isso na pratica como a função se comporta
$valor1=10;
print gettype($valor1);
//agora vamos fazer o casting
$valor = (float)$valor1;//tambem pode ser double
$texto=(string)$valor1;
print "<br/>";
print gettype($valor);
echo '<br>';
echo gettype($texto);

?>

</body>

</html>
