<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$usuario = 'root';
$senha = '';

try {
    $conexao = new PDO($dsn, $usuario, $senha);
    /*
        $query = '
            create table tb_usuarios(
                    id int not null primary key auto_increment,
                    nome varchar (50) not null,
                    email varchar(100) not null,
                    senha varchar(32) not null
                )
        ';
        $retorno = $conexao->exec($query); //retorno 0, pois nao estamos modificando registros

        echo $retorno;

        // $query = '
        //         insert into tb_usuarios(
        //             nome, email, senha 
        //         ) values (
        //             "Jorge Sant Ana", "jorge@teste.com.br", "123456"
        //         )
        // ';
        
        $query = '
            insert into tb_usuarios(
                nome,email,senha
                )values("andrew","andrewoliveira282@gmail.com","5213carrao")
        ';

        $conexao->exec($query); //vai retornar 1
        $query = '
        insert into tb_usuarios(
            nome,email,senha
            )values("andresa","andresapereira315@gmail.com","1234") 
    ';
    $conexao->exec($query); //vai retornar 1
    $query = '
        insert into tb_usuarios(
            nome,email,senhas
            )values("ana julia","santinha666@gmail.com","santinha")
    ';

    $conexao->exec($query); //vai retornar 1
        //echo $retorno;
        */
    $query = '
        select * from tb_usuarios
        ';
    $stmt = $conexao->query($query);
    //$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);// o fetch_assoc somento indices de string 
    //$lista = $stmt->fetchAll(PDO::FETCH_NUM);//ja o fetchnum sao os indices numericos
   // $lista = $stmt->fetchAll(PDO::FETCH_BOTH);//ja este pega ambos os elementos que no caso vamos deixar 
   $lista = $stmt->fetchAll(PDO::FETCH_OBJ); //aqui trabalhamos com um array de objetos 
    echo'<pre>';
    print_r($lista);
    echo'</pre>';
} catch (PDOException $e) {
    // echo '<pre>';
    //     print_r($e);
    // echo '</pre>';

    echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
    //registrar o erro de alguma forma.
}
