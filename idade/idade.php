<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(!preg_match('/^[a-zA-Z]*$/', $nome)){
    echo 'Nome inválido!';

}elseif(!preg_match('/^[1-9][0-9]*$/', $idade)){
    echo "Idade inválida!";

}elseif($idade > 18){
    echo $nome."\n é maior de 18 e tem ".$idade."\n anos.";

}elseif($idade == 1){
    echo $nome."\n não é maior de 18 e tem ".$idade."\n ano.";

}else{
    echo $nome."\n não é maior de 18 e tem ".$idade."\n anos.";
}   

?>