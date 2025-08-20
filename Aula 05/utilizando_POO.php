<?php
    
    class Carro{
        public $marca;
        public $modelo;
        public $ano;
        public $revisao;
        public $donos;

        public function __construct($marca,$modelo,$ano,$revisao,$donos){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->revisao = $revisao;
            $this->donos = $donos;
        }
    }

    $carro1=new Carro("Porsche","911",2020,false,3);

    $carro2=new Carro("Mitsubishi", "Lancer",1945,true,1);

    $carro3=new Carro("Fiat","Uno",1998,true,2);

    $carro4=new Carro("Chevrolet","Camaro",2020,false,4);

    $carro5=new Carro("Hyundai","HB20",2026,true,1);

    $carro6=new Carro("Volkswagen","Fusca",1959,true,3);

    echo "Marca: ". $carro1->marca ."\n";
    echo "Modelo: ". $carro1->modelo ."\n";
    echo "Ano: ". $carro1->ano ."\n";
    echo "Precisa de revisão? ". ($carro1->revisao? "Não":"Sim") ."\n";
    echo "Número de donos: ".$carro1->donos ."\n"."\n";

    echo "Marca: ". $carro2->marca ."\n";
    echo "Modelo: ". $carro2->modelo ."\n";
    echo "Ano: ". $carro2->ano ."\n";
    echo "Precisa de revisão? ". ($carro2->revisao? "Não":"Sim") ."\n";
    echo "Número de donos: ".$carro2->donos ."\n"."\n";

    echo "Marca: ". $carro3->marca ."\n";
    echo "Modelo: ". $carro3->modelo ."\n";
    echo "Ano: ". $carro3->ano ."\n";
    echo "Precisa de revisão? ". ($carro3->revisao? "Não":"Sim") ."\n";
    echo "Número de donos: ".$carro3->donos ."\n"."\n";

    echo "Marca: ". $carro4->marca ."\n";
    echo "Modelo: ". $carro4->modelo ."\n";
    echo "Ano: ". $carro4->ano ."\n";
    echo "Precisa de revisão? ". ($carro4->revisao? "Não":"Sim") ."\n";
    echo "Número de donos: ".$carro4->donos ."\n"."\n";

    echo "Marca: ". $carro5->marca ."\n";
    echo "Modelo: ". $carro5->modelo ."\n";
    echo "Ano: ". $carro5->ano ."\n";
    echo "Precisa de revisão? ". ($carro5->revisao? "Não":"Sim") ."\n";
    echo "Número de donos: ".$carro5->donos ."\n"."\n";

    echo "Marca: ". $carro6->marca ."\n";
    echo "Modelo: ". $carro6->modelo ."\n";
    echo "Ano: ". $carro6->ano ."\n";
    echo "Precisa de revisão? ". ($carro6->revisao? "Não":"Sim") ."\n";
    echo "Número de donos: ".$carro6->donos ."\n"."\n";

?>