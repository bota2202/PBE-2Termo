<?php

    $marca_carro1="Honda";
    $modelo_carro1= "Civic";
    $ano_carro1= 2016;
    $revisao_carro1= true;
    $donos_carro1= 2;

    $marca_carro2= "BMW";
    $modelo_carro2= "320I";
    $ano_carro2= 2012;
    $revisao_carro2=false;
    $donos_carro2=3;

    $marca_carro3= "Fiat";
    $modelo_carro3="Uno";
    $ano_carro3=2005;
    $revisao_carro3=false;
    $donos_carro3=1;

    $marca_carro4="Volkswagen";
    $modelo_carro4="Jetta";
    $ano_carro4=2020;
    $revisao_carro4=true;
    $donos_carro4=7;

    //Exercício 1

    function exibir($marca, $modelo, $ano, $revisao, $donos){
        if($revisao==1){
            return "O $marca $modelo, do ano $ano, já passou por $donos donos e não precisa de revisão.\n";
        }else{
            return "O $marca $modelo, do ano $ano, já passou por $donos donos e precisa de revisão.\n";
        }
    }

    echo exibir($marca_carro1, $modelo_carro1, $ano_carro1, $revisao_carro1, $donos_carro1);

    //Exercício 2 

    function seminovo($marca,$modelo , $ano){
        if(date("Y")-$ano>3){
            return "O carro $marca $modelo, do ano $ano não é seminovo\n";
        }else{
            return "O carro $marca $modelo, do ano $ano é seminovo\n";
        }
    }

    echo seminovo($marca_carro1, $modelo_carro1, $ano_carro1);

    //Exercício 3

    function precisarevisao($revisao, $ano){
        if($revisao== 1){
            return "Seu carro não precisa de revisão\n";
        }else{
            if($ano<2022){
                return "Seu carro precisa de revisão\n";
            }else{
                return "Seu carro não precisa de revisão\n";
            }
        }
    }

    echo precisarevisao($revisao_carro1,$ano_carro1);

    //Revisão 4

function calcularpreco($marca, $ano, $donos) {  
    if ($marca == "Honda") {
        $preco = 150000;
    } else if ($marca == "BMW") {
        $preco = 300000;
    } else if ($marca == "Fiat") {
        $preco = 300000;
    } else {     
        $preco = 70000;
    }

    $porcentagem = ($donos - 1) * 0.05; 
    $preco = $preco * (1 - $porcentagem);

    $anosUso = date("Y") - $ano;
    $descontoporano = $anosUso * 3000;
    $preco = $preco - $descontoporano;

    if ($preco < 0) {
        $preco = 0;
    }

    return "O preço estimado do $marca $ano é R$ " . number_format($preco, 2, ',', '.') . "\n";
}

echo calcularpreco("Honda", 2016, 2);

?>      