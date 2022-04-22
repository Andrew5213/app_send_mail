<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
$parametro=2;
switch ($parametro){
    case 1:
        print 'entrou no paremetro 1 ';
        break;
    case 2:
        print 'entrou no parametro 2 ';
        break;
    case 3:
        print 'entrou no parametro 3';
        break;
    default:
        print 'nao entrou em nenhum case';
        break;
}
?>
</body>

</html>
