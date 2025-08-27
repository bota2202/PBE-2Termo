<?php 

    class Pessoa{

        private $nome;
        private $cpf;
        private $telefone;
        private $idade;
        private $email;
        private $senha;

        public function setnome ($nome){
            $this->nome = ucwords(strtolower($nome));
        }
        public function getnome (){
            return $this->nome;
        }

        public function setcpf ($cpf){
            $this->cpf = preg_replace('/\D/','', $cpf);
        }

        public function getCpf () {
            return $this->cpf;
        }

        public function setTelefone ($telefone){
            $this->telefone = preg_replace('/\D/','',$telefone);
        }

        public function getTelefone (){
            return $this->telefone;
        }

        public function setidade ($idade){
            $this->idade = abs((int)$idade);
        }

        public function getidade(){
            return $this->idade;                
        }

        public function exibirinfo(){
            return"Nome do aluno: $this->nome\nCpf do aluno: $this->cpf\nTelefone do aluno: $this->telefone\nIdade do aluno: $this->idade\nE-mail do aluno: $this->email\nSenha do aluno: $this->senha\n";
        }

        public function __construct($nome, $cpf, $telefone, $idade, $email, $senha){
            $this->setnome($nome);
            $this->setcpf($cpf);
            $this->settelefone($telefone);
            $this->setidade($idade);
            $this->email = $email;
            $this->senha = $senha;
        }

    }

   $pessoa1=new Pessoa('OtáVio SAtuRnInO DA siLvA','490.929.088-51','(19)99949-5895','-16','otaviosaturnino22@gmail.com','1234');

   echo $pessoa1->getnome() "\n";

   echo $pessoa1->exibirinfo();

?>