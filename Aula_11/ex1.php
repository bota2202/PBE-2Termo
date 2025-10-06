<?php

// Cenário 1 – Viagem pelo Mundo
// Classes :
//   Turista
//   Localidade
//   Atividade (abstrata/interface)
//   Comida
//   CorpoDagua
// Métodos :
//   Turista: visitar(), comer(), nadar()
//   Localidade: informarAtividades()
//   Atividade: executar()
//   Comida: getDescricao()
//   CorpoDagua: getTipo()
// Relações :
//   Turista & localidade (assosiação)
//   Turista & atividade (associação)
//   Turista & comida (associação)
//   Turista & corpodagua (associação)
//   Localidade & atividade (agregação)

class Turista
{
    public string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function visitar(Localidade $localidade)
    {
        echo "{$this->nome} está visitando {$localidade->cidade}, {$localidade->pais}.\n";
    }

    public function comer(Comida $comida)
    {
        echo "{$this->nome} está comendo {$comida->getDescricao()}.\n";
    }

    public function nadar(CorpoDagua $corpoDagua)
    {
        echo "{$this->nome} está nadando em um(a) {$corpoDagua->getTipo()}.\n";
    }
}

class Localidade
{
    public string $pais;
    public string $cidade;
    public string $tipo;

    public function __construct(string $pais, string $cidade, string $tipo)
    {
        $this->pais = $pais;
        $this->cidade = $cidade;
        $this->tipo = $tipo;
    }

    public function informarAtividades(array $atividades)
    {
        echo "Atividades disponíveis em {$this->cidade}:\n";
        foreach ($atividades as $atividade) {
            $atividade->executar();
        }
    }
}

interface Atividade
{
    public function executar();
}

class Comida
{
    private string $descricao;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}

class CorpoDagua
{
    private string $tipo;

    public function __construct(string $tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }
}

class Passeio implements Atividade
{
    public function executar()
    {
        echo "Executando um passeio turístico.\n";
    }
}

class Mergulho implements Atividade
{
    public function executar()
    {
        echo "Executando um mergulho.\n";
    }
}

$turista = new Turista("Ana");
$praia = new Localidade("Brasil", "Fernando de Noronha", "praia");
$comida = new Comida("Peixe fresco");
$mar = new CorpoDagua("mar");
$atividades = [new Passeio(), new Mergulho()];

$turista->visitar($praia);
$turista->comer($comida);
$turista->nadar($mar);
$praia->informarAtividades($atividades);
