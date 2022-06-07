<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
/*
 * objetivo desse algoritmo e criar uma funçao que calcula o imposto de renda
 *
 */
function CalculaImposto($renda){
    if ($renda<1903.98){
        return $valorAPagar=0;
    }else if($renda<2826.65){
return $valorAPagar=$renda*0.075;
    }else if ($renda<3751.05){
return $valorAPagar=$renda*0.15;
    }else if ($renda<4664.68){
        return $valorAPagar=$renda*0.225;
    }else {
return $valorAPagar=$renda*0.275;
    }
}
echo CalculaImposto(1900);
echo '<br>';
echo CalculaImposto(2826);
echo '<br>';
echo CalculaImposto(3700);
echo '<br>';
echo CalculaImposto(4700);
echo '<br>';




?>
</body>

</html>
