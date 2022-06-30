<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
/*
aqui vamos ver um poucos dos comandos de manipulação de arrays
is_array(array1) -> verifica se o parametro(array1) e um array
array_keys(array1) -> retorna todas as chaves de um array
sort(array1) -> ordena um array e reajusta seus indices
asort(array1) -> ordena mais preserva seus indices
count(array1) -> conta a quantidade de elementos de um array
array_merge(array1) -> funde um ou mais arrays
explode(array1) -> divide uma string baseada em um delimitador
implode(array1) -> junta elementos de um array em uma string
*/
//vamos fazer uma variavel para verificar se e um array
//$array = 'string';
//$este_e_array = ['banana', 'uva'];
//if (is_array($array)) {
//    echo "sim e um array ";
//
//} else {
//    echo "nao e um array";
//}// vai retornar que nao e array
//echo "<hr/>";
//if (is_array($este_e_array)) {
//    echo "sim e um array ";
//
//} else {
//    echo "nao e um array";
//}// vai retornar que e
//echo "<hr/>";
////agora vamos para os indices associativos
//$array1 = [1 => 'a', 7 => 'b', 18 => 'c'];
//echo "<pre>";
//print_r($array1);
//echo "</pre>";
////agora vamos pegar as chaves do array1
//$chaves_array1 = array_keys($array1);
////agora vamos mostrar quais as chaves
//echo "<hr/>";
//echo "<pre>";
//print_r($chaves_array1);
//echo "</pre>";
//echo "<br/>";
//print_r($chaves_array1);
//agora vamos ordenar o array usando sort
$array = ['mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook', 'teclado '];
$array1 = ['mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook', 'teclado '];

//agora vamos imprimir para ver se vai dar certo
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<hr/>";

sort($array);
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<hr/>";
//agora usando asort
// $array1 = ['mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook', 'teclado '];
//agora vamos imprimir para ver se vai dar certo
echo "<pre>";
print_r($array1);
echo "</pre>";
echo "<hr/>";

asort($array1);
echo "<pre>";
print_r($array1);
echo count($array1);//aqui  e para saber quantos intens tem no vetor
echo "</pre>";
//juntando arrays
$vetor = ['osx', 'windows'];
$vetor2 = ['linux'];
$vetor3 = ['solaris'];
$novo_array = array_merge($vetor, $vetor2, $vetor3);
echo "<hr/>";
echo "<pre>";
print_r($novo_array);
echo count($novo_array);//aqui  e para saber quantos intens tem no vetor
echo "<hr/>";
echo "</pre>";
//agora vamos pegar dados de uma string e mandar para um array
$string = '28/05/2001';
$array_retorno = explode('/', $string);
echo $string;
echo "<br/>";
echo "<pre>";
print_r($array_retorno);
echo count($array_retorno);//aqui e para saber quantos itens tem no vetor
echo "</pre>";
echo "<hr/>";
echo "jintando elementos de um array em uma string";
echo "<br/>";
echo $juntar=implode($array_retorno);
?>


</body>

</html>