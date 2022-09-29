<?php

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];

    if(!preg_match('/^[a-zA-Z]*$/', $nome)){
        echo 'Nome inválido!';

    }elseif(!preg_match('/^[a-zA-Z]*$/', $sexo)){
        echo 'Sexo inválido!';

    }elseif($idade < 18){
        echo 'Não aceita!';
    
    }elseif(!preg_match('/^[femininoFEMININO]*$/', $sexo)){
        echo 'Não Aceita!';

    }else{
        echo $nome;
        echo "\n\n";
        echo "Aceita."; 
    }            

?> 