<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
#para fazer pesquisas dentro de array temos duas ferramentas nativas que e o
//in_array(); retorna true ou false para a existencia
//array_search(); ja este metodo retorna o indice do valor pesquisado caso ele exista
$lista_frutas=['banana','maca','morango','uva'];
echo '<pre>';
print_r($lista_frutas);
echo '</pre>';
//agora vamos pesquisar a maca  utilizando o in_array
$existe= in_array('maca',$lista_frutas);
if ($existe){ // valores booleanos nao precisa colocar o == true na frente
    echo "existe";
}else{
    echo "nao existe";
}
echo '<br>';
$existe2= array_search('morango',$lista_frutas);
if ($existe2==true){
    echo 'existe na posicao:  '.$existe2;
}else{
    echo "nao existe";
}
?>


</body>

</html>