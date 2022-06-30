<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
//aqui vamos estudar mais sobre um pouco do while em php
$numero=0;
echo "----inicio do loop----";
while ($numero<=10){
    //vamos imprimir ele aqui pra ver como vai somando mais um
//    echo "</br>",$numero;
    $numero++;
    if ($numero==2 || $numero==4){
        continue;
    }

    echo "</br>",$numero;
}
echo "<br/>","------fim do loop------";
?>

</body>

</html>