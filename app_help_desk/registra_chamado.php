<?php
echo "<pre>";
print_r($_POST);
echo "<pre/>";
//este aqui e o metodo que abri chamado
// vamos agora armazzenar essas informações no arquivo texto
$arquivo = fopen('arquivo.hd', 'a');//aqui e para criar um novo arquivo
//o primeiro parametro e o nome do arquivo e o segundo e oq o arquivo vai fazer no caso vai abrir ele
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
$texto = $titulo . '#' . $categoria . '#' . $descricao.PHP_EOL;//este php_eol e para fazer quebra de linha
//echo $texto;
fwrite($arquivo,$texto);//aqui estamos gravando no arquivo
fclose($arquivo);//aqui estamos fechando o arquivo.

?>
