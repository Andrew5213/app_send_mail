<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
//aqui vamos verificar o comportamento de variaveis false null e empty
$funcionario1=null;
$funcionario2='';
$funcionario3=false;
if (is_null($funcionario1)){ //este is_null e para testar se a variavel e nula
    echo "sim e nulo";
}else{
    echo "nao  e nulo";
}
echo "<br/>";
if (is_null($funcionario2)){
    echo "sim e nula";
}else {
    echo "nao e nula";
}
echo "</br>";
    if (is_null($funcionario3)){
    echo "sim e nula";
}else{
    echo "nao e nula";
}
//--------------------------------------------------------------------------
echo "<hr/>";
//agora vamos verificar se é vazia para isso
if (empty($funcionario1)){ //verifica se esta vazia e com isso e possivel ver que no empty ele pega o nulo como vazio
    echo "sim e vazia";
}else{
    echo "nao  e vazia";
}
echo "<br/>";
if (empty($funcionario2)){// verifica se e vazia
    echo "sim e vazia";
}else{
    echo "nao e vazia ";
}
echo "<br/>";
if (empty($funcionario3)){// verifica se e vazia e podemos ver uma variavel que recebe false e vazia.
    echo "sim e vazia";
}else{
    echo "nao e vazia ";
}
echo "<hr/>";

?>
</body>

</html>