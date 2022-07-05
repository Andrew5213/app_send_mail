<?php
//session_start();
//echo "<pre>";
//print_r($_SESSION);
//echo "<pre/>";
////para remover indices do array utilizamos o unset();
////agora para remover todos usa o sessio_destroy()
//unset($_SESSION['x']);//remove apenas se o indice existir sem dar erro
//echo "<br/>";
//echo "<pre>";
//print_r($_SESSION);
//echo "<pre/>";
//echo "<br/>";
//session_destroy();//neste apaga todas as session
////e comum forçar um redirecionamento para atualizar a pagina
//echo "<pre>";
//print_r($_SESSION);
//echo "<pre/>";
session_start();
session_destroy();
header("location: index.php");
?>