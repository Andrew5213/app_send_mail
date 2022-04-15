<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
<?php
#and ou && e a msm coisa
if (5==3 and 10>3){
    print 'verdadeiro';

}else{
    print 'falso';
}
$usuario_possiu_cartao_loja=true;
$valor_da_compra=225;
$valor_do_frete=50;
$recebeu_desconto_frete=false;
if ($usuario_possiu_cartao_loja==true and $valor_da_compra>=100){
    $valor_do_frete=0;
    $recebeu_desconto_frete=true;

}
?>
<h1>detalhes do pedido</h1>
<p>possui cartão da loja ?
    <?php
    if ($usuario_possiu_cartao_loja==true){
        print 'SIM';
    }else{
        print  'NAO';
    }
    ?>

</p>
<p>valor da compra :<?= $valor_da_compra?></p>
<p>recebeu desconto no frete  ?
    <?php
    //<condição> ? true:false
    $impressao=$usuario_possiu_cartao_loja? 'simm':'nao';
    print $impressao;
    /*
    if ($usuario_possiu_cartao_loja==true){
        print 'sim';

    }else{
        print 'nao';
    }
    */
    ?>
</p>
<p>valor da frete :<?= $valor_do_frete?></p>

</body>

</html>

