//Teste

<?php 
    $nome="Otávio";
    $idade=16;

    if($idade>=18){
        echo"$nome, você é maior de idade\n";
    }else{
        echo"$nome, você é menor de idade\n";
    }
?>

//Média

<?php

    $nome="Enzo Enrico";

    $nota1=6;
    $nota2=8.5;
    $media=($nota1+$nota2)/2;

    $aulas=100;
    $faltas=24;
    $presenca = (($aulas - $faltas) / $aulas) * 100;

    if($nome=="Enzo Enrico"){
        echo"Olá $nome, por seu pai ser o diretor, você passou";
    }else{
        if($media>=7 and $presenca>75){
        echo"Você passou com uma média de $media e $presenca% de presença";
        }else{
        echo"Você reprovou comuma média de $media e $presenca% de presença";
        }  
    }

?>