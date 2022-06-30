<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
//aqui vamos aprender um pouco mais sobre o foreach
//vamos fazer um vetor de itens
$itens = ['sofa', 'mesa', 'casadeira', 'fogao', 'geladeira'];
echo "<pre>";
print_r($itens);
echo "<pre/>";
foreach ($itens as $iten) {
    echo $iten . "<br/>";
    if ($iten == 'mesa') {
        echo 'compre uma mesa e ganhe 25% de desconto';
    }
}
?>
</body>

</html>
