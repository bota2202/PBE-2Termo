<?php

    // Cenário 3 – Fantasia e Destino
    // Classes :
    //   Personagem
    //   Jornada
    //   Clima
    //   Dificuldade
    //   Refeicao
    // Métodos :
    //   Personagem: seguirJornada(), enfrentarDesafio(), celebrar()
    //   Jornada: avancar()
    //   Clima: mudar()
    //   Dificuldade: superar()
    //   Refeicao: servir()

    class Personagem {
        public string $nome;

        public function __construct(string $nome) {
            $this->nome = $nome;
        }

        public function seguirJornada(Jornada $jornada) {
            echo "{$this->nome} está seguindo a jornada.\n";
            $jornada->avancar();
        }

        public function enfrentarDesafio(Dificuldade $desafio) {
            echo "{$this->nome} está enfrentando um desafio.\n";
            $desafio->superar($this);
        }

        public function celebrar(Refeicao $refeicao) {
            echo "{$this->nome} está celebrando.\n";
            $refeicao->servir($this);
        }
    }

    class Jornada {
        private string $descricao;

        public function __construct(string $descricao) {
            $this->descricao = $descricao;
        }

        public function avancar() {
            echo "A jornada '{$this->descricao}' avança.\n";
        }

        public function getDescricao(): string {
            return $this->descricao;
        }
    }

    class Clima {
        private string $estado;

        public function __construct(string $estado) {
            $this->estado = $estado;
        }

        public function mudar(string $novoEstado) {
            echo "O clima mudou de {$this->estado} para {$novoEstado}.\n";
            $this->estado = $novoEstado;
        }

        public function getEstado(): string {
            return $this->estado;
        }
    }

    class Dificuldade {
        private string $nivel;

        public function __construct(string $nivel) {
            $this->nivel = $nivel;
        }

        public function superar(Personagem $personagem) {
            echo "{$personagem->nome} superou o desafio de nível {$this->nivel}.\n";
        }

        public function getNivel(): string {
            return $this->nivel;
        }
    }

    class Refeicao {
        private string $descricao;

        public function __construct(string $descricao) {
            $this->descricao = $descricao;
        }

        public function servir(Personagem $personagem) {
            echo "{$personagem->nome} está desfrutando de {$this->descricao}.\n";
        }

        public function getDescricao(): string {
            return $this->descricao;
        }
    }

    $heroi = new Personagem("Elara");
    $jornada = new Jornada("Caminho do Destino");
    $clima = new Clima("Ensolarado");
    $desafio = new Dificuldade("Difícil");
    $refeicao = new Refeicao("banquete real");

    $heroi->seguirJornada($jornada);
    $clima->mudar("Tempestuoso");
    $heroi->enfrentarDesafio($desafio);
    $heroi->celebrar($refeicao);

?>
