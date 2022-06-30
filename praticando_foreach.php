<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
$funcionarios = [
    ['nome'=>'joao','salario'=>2500],['nome'=>'maria','salario'=>3000],
    ['nome'=>'julia','salario'=>499]];
echo '<pre>';
print_r($funcionarios);
echo '<pre/>';
foreach ($funcionarios as $i => $funcionario){
foreach ($funcionario as $i => $valor){
    echo "$i-$valor <br/>";

}
echo "<br/>";
}
?>
</body>

</html>
