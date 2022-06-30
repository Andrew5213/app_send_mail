<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

<?php
$texto = 'curso completo de php';

//string to lower
echo $texto. '<br />';
echo strtolower($texto); //deixa tudo minusculo
echo '<hr/>';

//string to upper
echo $texto. '<br />';
echo strtoupper($texto);//deixa tudo maiusculo
echo '<hr/>';

//upper case first
echo $texto. '<br />';
echo ucfirst($texto);//este transforma somente o primeiro caractere em maiusculo
echo '<hr/>';

//string lenght
echo $texto. '<br />';
echo strlen($texto);// conta a quantidade de caracteres
echo '<hr/>';

//string replace
echo $texto. '<br />';
echo str_replace('.', ',', '22.20'); // é case-sensitive
echo '<hr/>';

//string
echo $texto. '<br />';
//'Curso Completo de PHP'
//0,1,2,3,4,5 ... 20
echo substr($texto,0 ,14) . '...';
echo '<hr/>';



?>
</body>

</html>