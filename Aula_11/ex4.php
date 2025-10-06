<?php

    // Cenário 4 – Ciclo da Vida
    // Classes :
    //   Pessoa
    //   Escolha
    //   BancoDeSangue
    // Métodos :
    //   Pessoa: engravidar(), nascer(), crescer(), fazerEscolha(), doarSangue()
    //   Escolha: executar()
    //   BancoDeSangue: receberDoacao()

    class Pessoa {
        public string $nome;

        public function __construct(string $nome) {
            $this->nome = $nome;
        }

        public function engravidar() {
            echo "{$this->nome} está grávida.\n";
        }

        public function nascer() {
            echo "{$this->nome} nasceu.\n";
        }

        public function crescer() {
            echo "{$this->nome} está crescendo.\n";
        }

        public function fazerEscolha(Escolha $escolha) {
            echo "{$this->nome} está fazendo uma escolha.\n";
            $escolha->executar($this);
        }

        public function doarSangue(BancoDeSangue $banco) {
            echo "{$this->nome} está doando sangue.\n";
            $banco->receberDoacao($this);
        }
    }

    class Escolha {
        private string $descricao;

        public function __construct(string $descricao) {
            $this->descricao = $descricao;
        }

        public function executar(Pessoa $pessoa) {
            echo "{$pessoa->nome} realizou a escolha: {$this->descricao}.\n";
        }

        public function getDescricao(): string {
            return $this->descricao;
        }
    }

    class BancoDeSangue {
        private string $nome;

        public function __construct(string $nome) {
            $this->nome = $nome;
        }

        public function receberDoacao(Pessoa $pessoa) {
            echo "O banco de sangue {$this->nome} recebeu doação de {$pessoa->nome}.\n";
        }

        public function getNome(): string {
            return $this->nome;
        }
    }

    $pessoa = new Pessoa("Lucas");
    $escolha = new Escolha("Estudar Medicina");
    $banco = new BancoDeSangue("Central");

    $pessoa->nascer();
    $pessoa->crescer();
    $pessoa->engravidar();
    $pessoa->fazerEscolha($escolha);
    $pessoa->doarSangue($banco);

?>
