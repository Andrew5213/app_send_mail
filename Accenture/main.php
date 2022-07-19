<?php
$meses31=[1,3,5,7,8,10,12];
$meses30=[4,6,9,11];
$numeroDias=0;
$index = 0;
$mes=0;
$mesImformado=9;
$diaInformado=7;
while ($index<7){
    if ($mesImformado==$meses31[$index]){
        $numeroDias=31*($mesImformado-1)+$diaInformado;
    }
    $index++;
}
while ($index<4){
    if ($mesImformado==$meses30[30]){
        $numeroDias=30*($mesImformado-1)+$diaInformado;
    }
    $index++;
}
if ($mesImformado>2){
    $numeroDias=+1;
}else if ($mes==2){
    $numeroDias=31+$diaInformado;
}
echo $numeroDias;

?>