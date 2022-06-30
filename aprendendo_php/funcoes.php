<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
//esta e uma função void --> ou seja não tem retorno
function ExibirBoasVindas(){
    echo "benvindo ao curso de php <br>";
}
ExibirBoasVindas();
ExibirBoasVindas();
ExibirBoasVindas();
//agora vamos fazer uma função com retorno
function calcularAreaTerreno($largura,$comprimento){
    $area=$largura*$comprimento;
    return $area;
}
echo "a area do terreno e ",calcularAreaTerreno(30,30);


?>
</body>

</html>
