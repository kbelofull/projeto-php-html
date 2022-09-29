<?php

    $n1 = $_POST['n1'];
       
    if(preg_match('/^[0-9]*$/', $n1)){
        if((($n1 % 10) == 0) && (($n1 % 5) == 0) && (($n1 % 2) == 0)){
            echo "O número é divisível por 2, 5 e 10!";
        }else if(($n1 % 5) == 0){
            echo "O número é divisível somente por 5!";
        }else if(($n1 % 2) == 0){
            echo "O número é divisível somente por 2!";
        }else if((($n1 % 10) != 0) && (($n1 % 5) != 0) && (($n1 % 2) != 0)){
            echo "O número não é divisível por 2, 5 ou 10!";
        }
    }else{
        echo 'Entrada inválida!';
    }
?>