<?php

    class Cachorro{

        public $nome;
        public $raca;
        public $idade;
        public $castrado;
        public $sexo;
        
        public function __construct($nome,$raca,$idade,$castrado,$sexo){
            $this->nome=$nome;
            $this->raca=$raca;
            $this->idade=$idade;
            $this->castrado=$castrado;
            $this->sexo=$sexo;
        }
    }

    $cachorro1= new Cachorro("Gaia", "Pitbull", 3, true,"Fêmea");

    $cachorro2=new Cachorro("Pandora", "Vira-lata", 9, true,"Fêmea");

    $cachorro3=new Cachorro("Atena","Vira-lata",3,true,"Fêmea");

    $cachorro4=new Cachorro("Toddy","Yorkshire",8, false,"Macho");

    $cachorro5=new Cachorro("Amora","Vira-lata",1, false,"Fêmea");

    $cachorro6=new Cachorro("Baby", "Pinscher", 12, false, "Fêmea");

    $cachorro7=new Cachorro("Charlote", "Shitzu", 3, false, "Fêmea");

    $cachorro8=new Cachorro("Jessie","Vira-lata",12,false, "Fêmea");

    $cachorro9=new Cachorro("Pipoca","Vira-lata",14, true,"Fêmea");

    $cachorro10=new Cachorro("Polly", "Vira-lata", 16, true, "Fêmea");

    echo "Nome: ". $cachorro1->nome ."\n";
    echo "Raça: ". $cachorro1->raca ."\n";
    echo "Idade: ". $cachorro1->idade ."\n";
    echo "Castrado? ". ($cachorro1->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro1->sexo ."\n"."\n";

    echo "Nome: ". $cachorro2->nome ."\n";
    echo "Raça: ". $cachorro2->raca ."\n";
    echo "Idade: ". $cachorro2->idade ."\n";
    echo "Castrado? ". ($cachorro2->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro2->sexo ."\n"."\n";

    echo "Nome: ". $cachorro3->nome ."\n";
    echo "Raça: ". $cachorro3->raca ."\n";
    echo "Idade: ". $cachorro3->idade ."\n";
    echo "Castrado? ". ($cachorro3->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro3->sexo ."\n"."\n";

    echo "Nome: ". $cachorro4->nome ."\n";
    echo "Raça: ". $cachorro4->raca ."\n";
    echo "Idade: ". $cachorro4->idade ."\n";
    echo "Castrado? ". ($cachorro4->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro4->sexo ."\n"."\n";

    echo "Nome: ". $cachorro5->nome ."\n";
    echo "Raça: ". $cachorro5->raca ."\n";
    echo "Idade: ". $cachorro5->idade ."\n";
    echo "Castrado? ". ($cachorro5->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro5->sexo ."\n"."\n";

    echo "Nome: ". $cachorro6->nome ."\n";
    echo "Raça: ". $cachorro6->raca ."\n";
    echo "Idade: ". $cachorro6->idade ."\n";
    echo "Castrado? ". ($cachorro6->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro6->sexo ."\n"."\n";

    echo "Nome: ". $cachorro7->nome ."\n";
    echo "Raça: ". $cachorro7->raca ."\n";
    echo "Idade: ". $cachorro7->idade ."\n";
    echo "Castrado? ". ($cachorro7->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro7->sexo ."\n"."\n";

    echo "Nome: ". $cachorro8->nome ."\n";
    echo "Raça: ". $cachorro8->raca ."\n";
    echo "Idade: ". $cachorro8->idade ."\n";
    echo "Castrado? ". ($cachorro8->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro8->sexo ."\n"."\n";

    echo "Nome: ". $cachorro9->nome ."\n";
    echo "Raça: ". $cachorro9->raca ."\n";
    echo "Idade: ". $cachorro9->idade ."\n";
    echo "Castrado? ". ($cachorro9->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro9->sexo ."\n"."\n";

    echo "Nome: ". $cachorro10->nome ."\n";
    echo "Raça: ". $cachorro10->raca ."\n";
    echo "Idade: ". $cachorro10->idade ."\n";
    echo "Castrado? ". ($cachorro10->castrado? "Sim":"Não") ."\n";
    echo "Sexo: ".$cachorro10->sexo ."\n"."\n";


?>