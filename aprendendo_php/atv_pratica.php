<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
/*crie um script capaz de produzir, atraves  de um laço de repetiçã, um array com 6 elementos numericos
aleatoricos entre 1 a 60 , simulando o funcionamento do sorteio da mega sena. numeros nao podem se repetir
*/
//$num1 = rand(1,60);
//echo $num1." ";
//do{
//    $num2=rand(1,60);
//}while($num2==$num1);
//do{
//    $num3 =rand(1,60);
//}while($num3==$num1 || $num3||$num2);
//do{
//    $num4=rand(1,60);
//}while($num4==$num1 || $num4==$num2 || $num3==$num4);
//do{
//    $num5=rand(1,60);
//}while($num5==$num1 || $num5==$num2 || $num5==$num3 || $num5==$num4);
//do{
//    $num6=rand(1,60);
//}while($num6==$num1 || $num6==$num2 || $num6==$num3 || $num6==$num4 ||$num6==$num5);
//echo "<h2> Os numeros sorteados foram</h2>";
//echo "<br><p>$num1 , $num2 , $num3 , $num4 , $num5 , $num6</p>"
$rand1 = rand (1, 6);
echo "".$rand1."";

do{
    $rand2 = rand (1, 6);
} while ($rand2 == $rand1);
echo "".$rand2."";

do{
    $rand3 = rand (1, 6);
} while ($rand3 == $rand1 || $rand3 == $rand2);
echo "".$rand3."";

do{
    $rand4 = rand (1, 6);
} while ($rand4 == $rand1 || $rand4 == $rand2 || $rand4 == $rand3);
echo "".$rand4."";

do{
    $rand5 = rand (1, 6);
} while ($rand5 == $rand1 || $rand5 == $rand2 || $rand5 == $rand3 || $rand5 == $rand4);
echo "".$rand5."";

do{
    $rand6 = rand (1, 6);
} while ($rand6 == $rand1 || $rand6 == $rand2 || $rand6 == $rand3 || $rand6 == $rand4 || $rand6 == $rand5);
echo "".$rand6."";

?>
</body>

</html>
