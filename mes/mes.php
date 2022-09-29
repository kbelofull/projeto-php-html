<?php

    $n1 = $_POST['n1'];

    if(preg_match('/^[1-9][0-9]*$/', $n1) && ($n1 >= 1) && ($n1 <= 12)){
        $mes = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        echo $mes[$n1 - 1];
        }else{
            echo "Não existe mês respectivo à essa entrada!";
            }
?>


