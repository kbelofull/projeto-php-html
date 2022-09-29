<?php
    
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];
    $n7 = $_POST['n7'];
    $n8 = $_POST['n8'];
    $n9 = $_POST['n9'];
    $n10 = $_POST['n10'];

    if(!preg_match('/^[0-9][0-9]*$/', $n1)){
        echo 'Entrada 1 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n2)){
        echo 'Entrada 2 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n3)){
        echo 'Entrada 3 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n4)){
        echo 'Entrada 4 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n5)){
        echo 'Entrada 5 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n6)){
        echo 'Entrada 6 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n7)){
        echo 'Entrada 7 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n8)){
        echo 'Entrada 8 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n9)){
        echo 'Entrada 9 é inválida!';
    }elseif(!preg_match('/^[0-9][0-9]*$/', $n10)){
        echo 'Entrada 10 é inválida!';
    }else{
        $vetor[0] = $_POST['n1'];
        $vetor[1] = $_POST['n2'];
        $vetor[2] = $_POST['n3'];
        $vetor[3] = $_POST['n4'];
        $vetor[4] = $_POST['n5'];
        $vetor[5] = $_POST['n6'];
        $vetor[6] = $_POST['n7'];
        $vetor[7] = $_POST['n8'];
        $vetor[8] = $_POST['n9'];
        $vetor[9] = $_POST['n10'];

        $vetormax = max($vetor);
        $vetormin = min($vetor);
        $soma = 0;
        $npares = 0;
        $i;

        for($i = 0; $i < 10 ; $i++){
            if($vetor[$i] % 2 == 0){
                $soma = $soma + $vetor[$i];
                $npares++;
            }
        } 
        if($npares == 0){
            echo 'Maior: '.$vetormax;
            echo '</br>';
            echo 'Menor: '.$vetormin;
            echo '</br>';
            echo 'Não existem números pares.';
            
        }else{
            $media = $soma/$npares;

            echo 'Maior: '.$vetormax;
            echo '</br>';
            echo 'Menor: '.$vetormin;
            echo '</br>';
            echo 'Média dos pares: '.$media;
        }
    }
?>