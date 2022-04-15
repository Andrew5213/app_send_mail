<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
/*
 * criar uma aplicação capaz de intendificar se uma pessoa pode ou nao doar sangue
 * para isso tem que utilizar variaveis idade peso, as atribuições seram de forma estatica
 * condicoes se 16<=idade<=69 and peso>=50kg entao imprimir atende os requisitos
 * se nao nao atende os requisitos
 */
$idade=2;
$peso=62;
if ($idade>=16 and $idade<=69 and $peso>=50 ){
    print 'atende os requisitos para doar sangue<hr/>';
}else{
    print 'nao atende os requisitos para doar sangue<hr/>';
}

?>
</body>

</html>
