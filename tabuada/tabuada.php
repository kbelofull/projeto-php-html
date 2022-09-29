<?php

    $n1 = $_POST['n1'];

    if(preg_match('/^[0-9]*$/', $n1)){
        $i = 1; 
        while($i <= 10){
            echo $n1*$i."\n";
            $i++;
            }
    }else{
        echo 'Entrada inválida!';
    } 


            
?>
