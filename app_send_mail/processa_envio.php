<?php
class Menssagem{
    private $para =null;
    private $assunto =null;
    private $messagem=null;
    public function _get($atributo){
    return $this->$atributo;
}
public function _set($atributo,$valor){
        $this->$atributo=$valor;
}
public function mensagemValida(){
if(empty($this->para) || empty($this->assunto) || empty($this->messagem)){
    return false;
}else{
    return true;
}

}

}
$mensagem = new Menssagem();
$mensagem->_set('para',$_POST['para']);
$mensagem->_set('assunto',$_POST['assunto']);
$mensagem->_set('mensagem',$_POST['mensagem']);
if ($mensagem-> mensagemValida()){
    echo "mensagem e valida";

}else{
    echo 'mensagem nao e valida ';
}


?>