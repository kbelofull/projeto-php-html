<?php

    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $media;

    if(!preg_match('/^[a-zA-Z]*$/', $nome)){
        echo 'Nome inválido!';
        }elseif((((($n1>10)||($n1<0)))&&((($n2>10)||($n2<0)))&&((($n3>10)||($n3<0)))&&((($n4>10)||($n4<0))))&&(!is_numeric($n1)&&(!is_numeric($n2))&&(!is_numeric($n3))&&(!is_numeric($n4)))){
            echo 'As notas são inválidas!';
            }elseif((((($n1>10)||($n1<0)))&&((($n2>10)||($n2<0)))&&((($n3>10)||($n3<0))))||(!is_numeric($n1)&&(!is_numeric($n2))&&(!is_numeric($n3)))){
                echo 'As notas 1, 2 e 3 são inválidas!';
            }elseif((((($n1>10)||($n1<0)))&&((($n2>10)||($n2<0)))&&((($n4>10)||($n4<0))))||(!is_numeric($n1)&&(!is_numeric($n2))&&(!is_numeric($n4)))){
                echo 'As notas 1, 2 e 4 são inválidas!';
            }elseif((((($n2>10)||($n2<0)))&&((($n3>10)||($n3<0)))&&((($n4>10)||($n4<0))))||((!is_numeric($n2))&&(!is_numeric($n3))&&(!is_numeric($n4)))){
                echo 'As notas 2, 3 e 4 são inválidas!';
            }elseif((((($n1>10)||($n1<0)))&&((($n2>10)||($n2<0))))||(!is_numeric($n1)&&(!is_numeric($n2)))){
                echo 'As notas 1 e 2 são inválidas!';
            }elseif((((($n1>10)||($n1<0)))&&((($n3>10)||($n3<0))))||(!is_numeric($n1)&&(!is_numeric($n3)))){
                echo 'As notas 1 e 3 são inválidas!';
            }elseif((((($n1>10)||($n1<0)))&&((($n4>10)||($n4<0))))||(!is_numeric($n1)&&(!is_numeric($n4)))){
                echo 'As notas 1 e 4 são inválidas!';
            }elseif((((($n2>10)||($n2<0)))&&((($n3>10)||($n3<0))))||((!is_numeric($n2))&&(!is_numeric($n3)))){
                echo 'As notas 2 e 3 são inválidas!';
            }elseif((((($n2>10)||($n2<0)))&&((($n4>10)||($n4<0))))||((!is_numeric($n2))&&(!is_numeric($n4)))){
                echo 'As notas 2 e 4 são inválidas!';
            }elseif((((($n3>10)||($n3<0)))&&((($n4>10)||($n4<0))))||((!is_numeric($n3))&&(!is_numeric($n4)))){
                echo 'As notas 3 e 4 são inválidas!';
            }elseif(!is_numeric($n1)&&(!is_numeric($n2))&&(!is_numeric($n3))&&(!is_numeric($n4))){
                echo 'As notas são inválidas!';
            }elseif(!is_numeric($n1)&&(!is_numeric($n2))&&(!is_numeric($n3))){
                echo 'As notas 1, 2 e 3 são inválidas!';
            }elseif(!is_numeric($n1)&&(!is_numeric($n2))&&(!is_numeric($n4))){
                echo 'As notas 1, 2 e 4 são inválidas!';
            }elseif(!is_numeric($n2)&&(!is_numeric($n3))&&(!is_numeric($n4))){
                echo 'As notas 2, 3 e 4 são inválidas!';
            }elseif(!is_numeric($n1)&&(!is_numeric($n2))){
                echo 'Nota 1 e 2 são inválidas';
            }elseif(!is_numeric($n1)&&(!is_numeric($n3))){
                echo 'Nota 1 e 3 são inválidas';
            }elseif(!is_numeric($n1)&&(!is_numeric($n4))){
                echo 'Nota 1 e 4 são inválidas';
            }elseif(!is_numeric($n2)&&(!is_numeric($n3))){
                echo 'Nota 2 e 3 são inválidas';
            }elseif(!is_numeric($n2)&&(!is_numeric($n4))){
                echo 'Nota 2 e 4 são inválidas';
            }elseif(!is_numeric($n3)&&(!is_numeric($n4))){
                echo 'Nota 3 e 4 são inválidas';
            }elseif(!is_numeric($n1)){
                echo 'Nota 1 inválida';
            }elseif(!is_numeric($n2)){
                echo 'Nota 2 inválida';
            }elseif(!is_numeric($n3)){
                echo 'Nota 3 inválida';
            }elseif(!is_numeric($n4)){
                echo 'Nota 4 inválida';
            }elseif(((($n1>10)||($n1<0)))&&((($n2>10)||($n2<0)))&&((($n3>10)||($n3<0)))&&((($n4>10)||($n4<0)))){
                echo 'As notas são inválidas!';
            }elseif(((($n1>10)||($n1<0)))&&((($n2>10)||($n2<0)))&&((($n3>10)||($n3<0)))){
                echo 'As notas 1, 2 e 3 são inválidas!';
            }elseif(((($n1>10)||($n1<0)))&&((($n2>10)||($n2<0)))&&((($n4>10)||($n4<0)))){
                echo 'As notas 1, 2 e 4 são inválidas!';
            }elseif(((($n2>10)||($n2<0)))&&((($n3>10)||($n3<0)))&&((($n4>10)||($n4<0)))){
                echo 'As notas 2, 3 e 4 são inválidas!';
            }elseif(((($n1>10)||($n1<0)))&&((($n2>10)||($n2<0)))){
                echo 'As notas 1 e 2 são inválidas!';
            }elseif(((($n1>10)||($n1<0)))&&((($n3>10)||($n3<0)))){
                echo 'As notas 1 e 3 são inválidas!';
            }elseif(((($n1>10)||($n1<0)))&&((($n4>10)||($n4<0)))){
                echo 'As notas 1 e 4 são inválidas!';
            }elseif(((($n2>10)||($n2<0)))&&((($n3>10)||($n3<0)))){
                echo 'As notas 2 e 3 são inválidas!';
            }elseif(((($n2>10)||($n2<0)))&&((($n4>10)||($n4<0)))){
                echo 'As notas 2 e 4 são inválidas!';
            }elseif(((($n3>10)||($n3<0)))&&((($n4>10)||($n4<0)))){
                echo 'As notas 3 e 4 são inválidas!';
            }elseif(($n1>10)||($n1<0)){
                echo 'A nota 1 é inválida!';
            }elseif(($n2>10)||($n2<0)){
                echo 'A nota 2 é inválida!';
            }elseif(($n3>10)||($n3<0)){
                echo 'A nota 3 é inválida!';
            }elseif(($n4>10)||($n4<0)){
                echo 'A nota 4 é inválida!';
            }else{
                $media = ($n1 + $n2 + $n3 + $n4)/4;
                if($media >= 7){
                    echo $nome;
                    echo '</br>';
                    echo 'Média: '.$media;
                    echo '</br>';
                    echo 'Aprovado!';
                    }else{
                        echo $nome;
                        echo '</br>';
                        echo 'Média: '.$media;
                        echo '</br>';
                        echo 'Reprovado!';
                        }
                    }
?>


