<?php
//echo "oi estamos aqui "
//agora vamos recuperar as informações com a variavel super global GET
//echo "<pre>";
//print_r($_GET);
//echo "<pre/>";
//echo '<br/>';
//echo $_GET['email'];
//echo '<br/>';
//echo $_GET['senha'];
//aqui vamos modificar para deixar mais seguro
//vamos verificar o post agora

//print_r($_POST);
//echo '<br/>';
//echo $_POST['email'];
//echo '<br/>';
//echo $_POST['senha'];
//variavel para verificar autenticação
$usuario_autenticado = false;
//como nao adquiri conhecimento em banco de dados vamos deixar o sistema em um arrar
$usuarios_array = [
    ['email' => 'andrewoliveira282@gmail.com', 'senha' => '1234'],
    ['email' => 'andrewoliveira28@gmail.com', 'senha' => 'abcd']

];
//echo '<pre/>';
//print_r($usuarios_array);
//echo '<pre/>';//este aqui era so para ver o array
foreach ($usuarios_array as $user) {

    //vamos fazer uma verificação pra ver se oq esta no form é igual o app
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}
if ($usuario_autenticado==true){
    echo "usuario autenticado ";
}else{
    header('location: index.php?login=erro');//para recarregar a pagina
}
?>
