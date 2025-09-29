<?php 

    namespace Corrigir;

    // Jogo 3 Erros Código Php
    class Disciplinas {
    private $nomeDisciplina; private $cargaHoraria; private $professor; private $periodo;
    private $notaFinal; private $presenca;

    public function __construct($nomeDisciplina, $cargaHoraria, $professor, $periodo, $notaFinal, $presenca) {
    $this->nomeDisciplina = $nomeDisciplina;
    $this->cargaHoraria = $cargaHoraria;
    $this->professor = $professor;
    $this->periodo = $periodo;
    $this->notaFinal = $notaFinal;
    $this->presenca = $presenca;
    }

    public function aprovado() {
    return $this->notaFinal >= 6;
    }

    public function presencaValida() { return $this->presenca >= 60;
    }

    public function situacaoFinal() {
    return ($this->aprovado() && $this->presencaValida()) ? "Aprovado" : "Reprovado";
    }

    // Método resumo
    public function resumo() {
    return "Disciplina: " . $this->nomeDisciplina . PHP_EOL .
    "Carga Horária: " . $this->cargaHoraria . " horas" . PHP_EOL .

    "Professor: " . $this->professor . PHP_EOL . "Período: " . $this->periodo . PHP_EOL . "Nota Final: " . $this->notaFinal . PHP_EOL .
    "Presença: " . $this->presenca . "%" . PHP_EOL . "Situação: " . $this->situacaoFinal() . PHP_EOL . "	" . PHP_EOL;
    }

    // Getters
    public function getNomeDisciplina() { return $this->nomeDisciplina;
    }

    public function getCargaHoraria() { return $this->cargaHoraria;
    }

    public function getProfessor() { return $this->professor;
    }

    public function getPeriodo() { return $this->periodo;
    }

    public function getNotaFinal() { return $this->notaFinal;
    }

    public function getPresenca() { return $this->presenca;
    }

    // Setters
    public function setNomeDisciplina($nomeDisciplina) {
    $this->nomeDisciplina = $nomeDisciplina;
    }

    public function setCargaHoraria($cargaHoraria) {
    $this->cargaHoraria = $cargaHoraria;
    }

    public function setProfessor($professor) {
    $this->professor = $professor;
    }

    public function setNotaFinal($notaFinal) {
    $this->notaFinal = $notaFinal;
    }

    public function setPresenca($presenca) {
    $this->presenca = $presenca;
    }
    }

    // Testando
    $d1 = new Disciplinas("PHP", 80, "Samuka", "Noturno", 8.5, 75);
    $d2 = new Disciplinas("JavaScript", 60, "Brunão", "Matutino", 5.0, 55);
    $d3 = new Disciplinas("HTML e CSS", 40, "Cleiton", "Vespertino", 7.0, 65);

    echo $d1->resumo(); echo $d2->resumo(); echo $d3->resumo();

    $d2->setNotaFinal(6.5); echo $d2->resumo();

    class DisciplinaComplementar extends Disciplinas {
        private $creditos;          
        private $atividadeExtra;   
        public function __construct($nomeDisciplina, $cargaHoraria, $professor, $periodo, $notaFinal, $presenca, $creditos = 2, $atividadeExtra = "Seminar") {
            parent::__construct($nomeDisciplina, $cargaHoraria, $professor, $periodo, $notaFinal, $presenca);
            $this->creditos = $creditos;
            $this->atividadeExtra = $atividadeExtra;
        }

        public function bonusPorAtividade() {
            $this->setNotaExtra(0.5);
        }

        public function resumo() {
            return "Disciplina: " . $this->nomeDisciplina . PHP_EOL .
                "Créditos: " . $this->creditos . PHP_EOL .
                "Atividade Extra: " . $this->atividadeExtra . PHP_EOL;
        }

        public function getCreditos() {
            return $this->creditos;
        }

        public function setCreditos($creditos) {
            $this->creditos = $creditos;
        }

        public function getAtividadeExtra() {
            return $this->atividadeExtra;
        }

        public function setAtividadeExtra($atividadeExtra) {
            $this->atividadeExtra = $atividadeExtra;
        }
    }

    // Teste
    $d7 = new DisciplinaComplementar("Fotografia", 30, "Renata", "Vespertino", 7.0, 80, 3, "Workshop");
    $d7->bonusPorAtividade();
    echo $d7->resumo();


    class DisciplinaOnline extends Disciplinas {
        private $aulasAssistidas; 

        public function __construct($nomeDisciplina, $cargaHoraria, $professor, $periodo, $notaFinal, $presenca, $aulasAssistidas = 0) {
            parent::__construct($nomeDisciplina, $cargaHoraria, $professor, $periodo, $notaFinal, $presenca);
            $this->aulasAssistidas = $aulasAssistidas;
        }

        public function presencaValida() {
            $minAulas = 0.75 * $this->getCargaHoraria(); 
            return ($this->aulasAssistidas >= $minAulas) && parent::presencaValida();
        }

        public function resumo() {
            return parent::resumo() .
                "Aulas Assistidas Online: " . $this->aulasAssistidas->count() . "/" . $this->getCargaHoraria() . PHP_EOL;
        }

        public function getAulasAssistidas() {
            return $this->aulasAssistidas;
        }

        public function setAulasAssistidas($aulasAssistidas) {
            $this->aulasAssistidas = $aulasAssistidas;
        }
    }

    $d8 = new DisciplinaOnline("Inglês Online", 60, "Carla", "Matutino", 8.0, 65, 50);
    echo $d8->resumo();


?>
