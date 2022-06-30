<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
// agora vamos comecar array sequenciais(numericos)
$lista_frutas = array('banana', 'maca', 'morango', 'uva');
$lista_frutas2 = ['banana', 'maca', 'morango', 'uva', 'a'=>'abacate']; //usando o igual maior estamos associando o indice "a" a abacate 
echo '<pre>';
var_dump($lista_frutas2);
echo '</pre>';
echo '<br>';
echo '<pre>';
echo '</hr>';

print_r($lista_frutas);
echo '</pre>';
//agora vamos achar uma da posição atual
echo $lista_frutas[1];//desta forma aparece o item que esta na posição 1 = maca
// agora vamos adicionar e criar uma posicao w
$lista_frutas['w']='abacaxi';
echo '<pre>';
var_dump($lista_frutas);
echo '</pre>';
?>


</body>

</html>