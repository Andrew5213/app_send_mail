<?php

$dsn = 'mysql:host:localhost;dbname=php_com_pdo';
$usuario = 'root';
$senha = '';
//agora vamos fazer tratamento de erros 
try {
    $conexao = new PDO($dsn, $usuario, $senha);
} catch (PDOException $e) {
   // print_r($e);
}

?>