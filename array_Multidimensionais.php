<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
#aqui vamos fazer um array multidimensional nao e uma matriz e sim um vetor dentro de outro
#para isso vamos fazer uma lista de pessoas e uma de frutas
//agora vamos criar uma lista coisas

$lista_coisas = [];//ou $lista_Coisas=array();
$lista_coisas['frutas'] = [1 => 'banana', 2 => 'maca', 3 => 'morango', 4 => 'uva']; // este => e a associação da chave ou seja o indice do vetor
$lista_coisas['pessoas'] = [1 => 'joao', 2 => 'jose', 3 => 'maria'];
echo '<pre>';
print_r($lista_coisas);
echo '</pre>';
//agora vamos pesquisar o morando e o jose
echo "pesquisando o jose";
echo '</br>';
echo $lista_coisas['pessoas'][2];
echo '</br>';
echo "pesquisando morango";
echo '</br>';
echo $lista_coisas['frutas'][3];


?>


</body>

</html>