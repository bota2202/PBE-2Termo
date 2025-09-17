<?php 

    // Exercício 1 – Formas Geométricas
    // Crie uma interface `Forma` com o método `calcularArea()`. Implemente as classes:
    // - `Quadrado` (lado),
    // - `Retangulo` (base e altura),
    // - `Circulo` (raio).

    namespace Exercícios_17_09_25;

    interface Forma{
        public function calcularArea();
    }

    class Quadrado implements Forma{
        private float $lado;

        public function __construct(float $lado){
            $this->lado = $lado;
        }

        public function calcularArea(){
            return $this->lado * $this->lado;
        }
    }

    class Retangulo implements Forma{
        private float $base;
        private float $altura;

        public function __construct(float $base, float $altura){
            $this->base = $base;
            $this->altura = $altura;
        }

        public function calcularArea(){
            return $this->base * $this->altura;
        }
    }

    class Circulo implements Forma{
        private float $raio;

        public function __construct(float $raio){
            $this->raio = $raio;
        }

        public function calcularArea(){
            return number_format(pi() * ($this->raio ** 2),2);
        }
    }

    $quadrado1 = new Quadrado(4);
    $retangulo1 = new Retangulo(4, 6);
    $circulo1 = new Circulo(3);

    echo "Área do Quadrado: " . $quadrado1->calcularArea() . "\n<br>";
    echo "Área do Retângulo: " . $retangulo1->calcularArea() . "\n<br>";
    echo "Área do Círculo: " . $circulo1->calcularArea() . "\n<br>";

    // Exercício 2 – Animais e Sons
    // Crie uma classe pai `Animal` com o método `fazerSom()`. Implemente as classes:
    // - `Cachorro` → "Au au!",
    // - `Gato` → "Miau!",
    // - `Vaca` → "Muuu!".

    class Animal{
        public function fazerSom(){
            return;
        }
    }

    class Cachorro extends Animal{
        public function fazerSom(){
            return "Au Au";
        }
    }

    class Gato extends Animal{
        public function fazerSom(){
            return "Miau";
        }
    }

    class Vaca extends Animal{
        public function fazerSom(){
            return "Muuu";
        }
    }

    $cachorro1 = new Cachorro();
    $gato1 = new Gato();
    $vaca1 = new Vaca();

    echo "Som do Cachorro: " . $cachorro1->fazerSom() . "\n<br>";
    echo "Som do Gato: " . $gato1->fazerSom() . "\n<br>";
    echo "Som da Vaca: " . $vaca1->fazerSom() . "\n<br>";

    // Exercício 3 – Meios de Transporte
    // Crie uma classe abstrata `Transporte` com o método `mover()`. Implemente as classes:
    // - `Carro` → "O carro está andando na estrada",
    // - `Barco` → "O barco está navegando no mar",
    // - `Avião` → "O avião está voando no céu".
    // - `Elevador` → "O Elevador está correndo pelo no prédio".

    class Transporte{
        public function mover(){
            return;
        }
    }

    class Carro extends Transporte{
        public function mover(){
            return "O carro está andando na estrada";
        }
    }

    class Barco extends Transporte{
        public function mover(){
            return "O barco está navegando no mar";
        }
    }

    class Aviao extends Transporte{
        public function mover(){
            return "O avião está voando no céu";
        }
    }

    class Elevador extends Transporte{
        public function mover(){
            return "O Elevador está correndo pelo no prédio";
        }
    }

    $carro1 = new Carro();
    $barco1 = new Barco();
    $aviao1 = new Aviao();
    $elevador1 = new Elevador();

    echo $carro1->mover() . "\n<br>";
    echo $barco1->mover() . "\n<br>";
    echo $aviao1->mover() . "\n<br>";
    echo $elevador1->mover() . "\n<br>";

    // Exercício 4 – Notificações
    // Crie duas classes:
    // - `Email` com o método `enviar()`, que retorna "Enviando email...",
    // - `Sms` com o método `enviar()`, que retorna "Enviando SMS...".
    // Depois crie uma função `notificar($meio)` que aceite qualquer objeto com `enviar()` e faça a
    // chamada. Teste com ambos os objetos.

    class Email{
        public function enviar(){
            return "Enviando email...";
        }
    }

    class Sms{
        public function enviar(){
            return "Enviando SMS...";
        }
    }

    function notificar($meio){
        echo $meio->enviar() . "\n<br>";
    }

    $email1 = new Email();
    $sms1 = new Sms();

    notificar($email1);
    notificar($sms1);

    // Exercício 5 – Calculadora com Sobrecarga Simulada
    // Crie uma classe `Calculadora` com o método `somar()`.
    // - Se receber 2 números, retorna a soma dos dois.
    // - Se receber 3 números, retorna a soma dos três.

    class Calculadora{
        public function somar($numeros){
            return array_sum($numeros);
        }
    }

    $calculadora1 = new Calculadora();

    echo "Soma de 2 números (3 + 5): " . $calculadora1->somar([3, 5]) . "\n<br>";
    echo "Soma de 3 números (3 + 5 + 2): " . $calculadora1->somar([3, 5, 2]) . "\n<br>";

    // Crie 3 Interfaces:
    // Movel → Método mover()
    // Abastecivel → Método abastecer($quantidade)
    // Manutenivel → Método fazerManutencao()
    // Crie as classes:
    // Carro → Deve implementar Movel e Abastecivel.
    // • mover() imprime que o carro está se movimentando.
    // • abastecer($quantidade) imprime a quantidade abastecida.
    // Bicicleta → Deve implementar Movel e Manutenivel.
    // • mover() imprime que a bicicleta está pedalando.
    // • fazerManutencao() imprime que a bicicleta foi lubrificada.
    // Onibus → Deve implementar Movel, Abastecivel e Manutenivel.
    // • mover() imprime que o ônibus está transportando passageiros.
    // • abastecer($quantidade) imprime a quantidade abastecida.
    // • fazerManutencao() imprime que o ônibus está passando por revisão.

    interface Movel{
        public function mover();
    }

    interface Abastecivel{
        public function abastecer($quantidade);
    }

    interface Manutenivel{
        public function fazerManutencao();
    }

    class carro2 implements Movel,Abastecivel{

        public function mover(){
            return "O carro está se movimentando";
        }

        public function abastecer($quantidade){
            return "O carro foi abastecido com " . $quantidade . " litros";
        }

    }

    class Bicicleta implements Movel, Manutenivel{

        public function mover(){
            return "A bicicleta está pedalando";
        }

        public function fazerManutencao(){
            return "A bicicleta foi lubrificada";
        }

    }

    class Onibus implements Movel, Abastecivel, Manutenivel{

        public function mover(){
            return "O ônibus está transportando passageiros";
        }

        public function abastecer($quantidade){
            return "O ônibus foi abastecido com " . $quantidade . " litros";
        }

        public function fazerManutencao(){
            return "O ônibus está passando por revisão";
        }

    }

    $carro2 = new carro2();
    $bicicleta1 = new Bicicleta();
    $onibus1 = new Onibus();

    echo $carro2->mover() . "\n<br>";
    echo $carro2->abastecer(40) . "\n<br>";
    echo $bicicleta1->mover() . "\n<br>";
    echo $bicicleta1->fazerManutencao() . "\n<br>";
    echo $onibus1->mover() . "\n<br>";
    echo $onibus1->abastecer(100) . "\n<br>";
    echo $onibus1->fazerManutencao() . "\n<br>";

?>