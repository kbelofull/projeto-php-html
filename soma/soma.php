<?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if ((is_numeric($n1)) && (is_numeric($n2))){
        $soma = $n1 + $n2;
        if($soma >= 50){
            $soma = $soma + 10;
            echo $soma;
        }else{
            $soma = $soma - 5;
            echo $soma;
        }
    }elseif((!is_numeric($n1)) || (!is_numeric($n2))){
        echo "Número inválido!!!";
    }
?>

