<?php 

    class Usuarios{
        public string $nome;
        public string $cpf;
        public string $sexo;
        public string $email;
        public string $estadocivil;
        public string $cidade;
        public string $estado;
        public string $endereco;
        public string $cep;

        public function __construct(string $nome, string $cpf,string $sexo, string $email, string $estadocivil, string $cidade, string $estado, string $endereco, string $cep){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estadocivil = $estadocivil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
        }
    }

    $usuario1=new Usuarios("Josenildo Afonso Souza","100.200.300-40","Masculino","josenewdo.souza@gmail.com","Casado","Xique-Xique","Bahia","Rua da amizade, 99","40123-98");

    $usuario2=new Usuarios("Valentina Passos Scherrer","070.070.060-70","Feminino","scherrer.valen@outlook.com","Divorciada","Iracemápolis","São Paulo","Avenida da saudade, 1942", "23456-24");

    $usuario3=new Usuarios("Claudio Braz Nepumoceno","575.575.242-32","Masculino","Clauclau.nepumoceno@gmail.com","Solteiro","Piripiri","Piauí","Estrada 3, 33","12345-99");

    echo "Nome: ". $usuario1->nome ."\n";
    echo "Cpf: ". $usuario1->cpf ."\n";
    echo "Sexo: ".$usuario1 -> sexo ."\n";
    echo "E-mail: ". $usuario1->email ."\n";
    echo "Estado civil: ". $usuario1->estadocivil ."\n";
    echo "Cidade: ". $usuario1->cidade ."\n";
    echo "Estado: ".$usuario1->estado ."\n";
    echo "Endereço: ".$usuario1->endereco ."\n";
    echo "Cep: ". $usuario1->cep ."\n"."\n";

    echo "Nome: ". $usuario2->nome ."\n";
    echo "Cpf: ". $usuario2->cpf ."\n";
    echo "Sexo: ".$usuario2 -> sexo ."\n";
    echo "E-mail: ". $usuario2->email ."\n";
    echo "Estado civil: ". $usuario2->estadocivil ."\n";
    echo "Cidade: ". $usuario2->cidade ."\n";
    echo "Estado: ".$usuario2->estado ."\n";
    echo "Endereço: ".$usuario2->endereco ."\n";
    echo "Cep: ". $usuario2->cep ."\n"."\n";

    echo "Nome: ". $usuario3->nome ."\n";
    echo "Cpf: ". $usuario3->cpf ."\n";
    echo "Sexo: ".$usuario3 -> sexo ."\n";
    echo "E-mail: ". $usuario3->email ."\n";
    echo "Estado civil: ". $usuario3->estadocivil ."\n";
    echo "Cidade: ". $usuario3->cidade ."\n";
    echo "Estado: ".$usuario3->estado ."\n";
    echo "Endereço: ".$usuario3->endereco ."\n";
    echo "Cep: ". $usuario3->cep ."\n"."\n";

?>