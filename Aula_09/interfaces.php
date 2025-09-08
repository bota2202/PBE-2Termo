<?php

    //Modificadores de acesso:
    //Existem 3 tipos: Public, Private e Protected

    //Public NomeDoAtributo: métodos e atributos públicos

    //Private NomeDoAtributo: métodos e atributos privados para acesso somente dentro da calsse. Utilizamos getters e setters para acessá-los

    //Protected NomeDoAtributo: métodos e atributos podem ser acessados por dentro da calsse ou pelas classes filhas

    namespace Aula_09;

    Interface Pagamento{

        public function pagar($valor);
    }

    class CartaoDeCredito implements Pagamento{
            public function pagar($valor){
                return "Pagamento de $valor feito no cartão de crédito\n";   
        }
    }

    class Pix implements Pagamento{
        public function pagar($valor){
                return "Pagamento de $valor feito no PIX\n";   
        }
    }

    class DinheiroFisico implements Pagamento{
        public function pagar($valor){
            return "Pagamento de ". $valor*0.9 ." feito no dinheiro\n";   
        }
    }

    $cred=new CartaoDeCredito();

    echo "Testando cartão de crédito para pagamento:\n   {$cred->pagar(250)}\n";

    $pix=new Pix();

    echo "Testando pix para pagamento:\n{$pix->pagar(100)}\n";

    $dinheiro=new DinheiroFisico();

    echo "Testando dinheiro para pagamento:\n{$dinheiro->pagar(200)}\n";

    interface Forma {
        function calcularArea($medida1, $medida2 = null);
    }

    class Quadrado implements Forma {
        function calcularArea($medida1, $medida2 = null) {
            $area = $medida1 ** 2;
            echo "Quadrado de lado {$medida1} tem área = {$area}\n";
        }
    }

    class Triangulo implements Forma {
        function calcularArea($medida1, $medida2 = null) {
            $area = number_format(($medida1 * $medida2) / 2, 2);
            echo "Triângulo com base {$medida1} e altura {$medida2} tem área = {$area}\n";
        }
    }

    class Circulo implements Forma {
        function calcularArea($medida1, $medida2 = null) {
            $area = number_format(($medida1 ** 2) * pi(), 2);
            echo "Círculo de raio {$medida1} tem área = {$area}\n";
        }
    }

    class Pentagono implements Forma{
        function calcularArea($medida1, $medida2 = null) {
            $area = number_format((5*$medida1*$medida2)/2,2);
            echo "A área de um pentágono com medidas iguais à {$medida1} e {$medida2} tem área de {$area}\n";
        }
    }

    class Hexagono implements Forma{
        function calcularArea($medida1, $medida2 = null) {
            $area = number_format(((3*($medida1**2))*sqrt(3))/2,2);
            echo "A área de um hexágono com medida igual à {$medida1} tem área de {$area}\n";
        }
    }

    $quadrado = new Quadrado();
    $triangulo = new Triangulo();
    $circulo = new Circulo();
    $pentagono = new Pentagono();
    $hexagono = new Hexagono();

    $quadrado->calcularArea(10);
    $triangulo->calcularArea(10, 5);
    $circulo->calcularArea(7);
    $pentagono->calcularArea(2,5);
    $hexagono->calcularArea(1.52);
?>