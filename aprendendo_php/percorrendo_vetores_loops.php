<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
$registros = [['titulo' => 'titulo noticias1', 'conteudo' => 'conteudo noticias1'], ['titulo' => 'titulo noticias2', 'conteudo' => 'conteudo noticias2'], ['titulo' => 'titulo noticias3', 'conteudo' => 'conteudo noticias3'],['titulo' => 'titulo noticias4', 'conteudo' => 'conteudo noticias4']];

//print_r($registros);
////vamos percorrer com while
//$cont = 0;
//echo "<hr/>";
//while ($cont<3) {
//    echo $registros[$cont],"</br>";
//    $cont++;
//}
echo "<pre>";
print_r($registros);
echo "<pre/>";
$cont = 0;

while ($cont < count($registros)) {
    echo '<h3>' . $registros[$cont]['titulo'] . '</h3>';
    echo '<p>' . $registros[$cont]['conteudo'] . '</p>';
    $cont++;
    echo "<hr/>";

}
echo "<hr/>";
echo "<hr/>";
//agora com o for
for($cont1=0;$cont1<count($registros);$cont1++){
    echo '<h3>' . $registros[$cont1]['titulo'] . '</h3>';
    echo '<p>' . $registros[$cont1]['conteudo'] . '</p>';
    $cont++;
    echo "<hr/>";
}
?>
</body>

</html>

