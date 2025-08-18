<?php 

    // //Exercício 1

    // $nome = readline("Digite seu nome: ");
    // $idade = readline("Digite sua idade: ");;

    // if($idade>=18){
    //     echo"$nome, você é maior de idade\n";
    // }else{
    //     echo"$nome, você é menor de idade\n";
    // }

    // //Exercício 2

    // $nota = readline("Digite a nota do aluno: ");

    // if($nota<7){
    //     echo"Você foi reprovado\n";
    // }else if($nota>=7 && $nota< 9){
    //     echo "Bom\n";
    // }else{
    //     echo "Excelente\n";
    // }
    
    // //Exercício 3

    // $dia= readline("Digite o número do dia da semana: ");

    // switch($dia){
    //     case 1:
    //         echo"Domingo\n";
    //         break;
    //     case 2:
    //         echo"Segunda\n";
    //         break;
    //     case 3:
    //         echo"Terça\n";
    //         break;
    //     case 4:
    //         echo"Quarta\n";
    //         break;
    //     case 5:
    //         echo"Quinta\n";
    //         break;
    //     case 6:
    //         echo"Sexta\n";
    //         break;
    //     case 7:
    //         echo"Sábado\n";
    //         break;
    //     default:
    //         echo "Dia inválido\n";
    // }

    // //Exercício 4

    // $n1= readline("Digite o 1° número: ");
    // $n2= readline("Digite o 2° número: ");
    // $operacao= readline("Digite a operação que quer: (x  /  +  -) ");

    // $n1 = (float)$n1;
    // $n2 = (float)$n2;
    // $n3 = 0;

    // switch($operacao){
    //     case 'x':
    //         $n3 = $n1*$n2;
    //         echo"$n1 multiplicado por $n2 é: $n3\n";
    //         break;

    //     case '/':
    //         $n3 = $n1/$n2;
    //         echo"$n1 dividido por $n2 é: $n3\n";
    //         break;     

    //     case '+':
    //         $n3 = $n1+$n2;
    //         echo"$n1 mais $n2 é: $n3\n";
    //         break;   
            
    //     case '-':
    //         $n3 = $n1-$n2;
    //         echo"$n1 menos $n2 é: $n3\n";
    //         break;            
    // }

    // //Exercício 5

    // for($i=0;$i<11;$i++){
    //     echo"$i\n";
    // }

    // // Exercício 6

    // for($i=10;$i!=0; $i--){
    //     echo"$i\n";
    // }

    // //Exercício 7

    // $pares=0;

    // $nf=readline("Digite até que número deseja saber os pares: ");

    // for($i=0;$i<$nf+1;$i++){
    //     if($i%2==0){
    //         $pares+=1;
    //     }
    // }

    // echo "Entre 0 e $nf existem $pares\n"

    // //Exercício 8

    // $num = readline("Digite o número que deseja saber a tabuada: ");
    // $num=(float)$num;

    // for($i=0;$i<11;$i++){
    //     $nt=$num*$i;
    //     echo "$i x $num = $nt\n";
    // }

    // //Exercício 9

    // $temperatura = readline("Quantos graus está? ");

    // $temperatura = (float) $temperatura;

    // if($temperatura < 15){
    //     echo "Está frio";
    // }else if($temperatura <= 25 && $temperatura >=15){
    //     echo "Está agradável";
    // }else{
    //     echo "Está quente";
    // }

    // //Exercício 10

    // date_default_timezone_set('America/Sao_Paulo');

    // while (true) {
    //     $nome = readline("Qual seu nome? ");
        
    //     $resposta = readline(
    //         "Digite:\n".
    //         "1 - Olá\n".
    //         "2 - Data atual\n".
    //         "3 - Sair\n".
    //         "Opção: "
    //     );

    //     switch ($resposta) {
    //         case '1':
    //             echo "Olá $nome\n";
    //             break;

    //         case '2':
    //             echo date("d/m/Y H:i:s") . "\n";
    //             break;

    //         case '3':
    //             echo "Saindo...\n";
    //             exit; 
            
    //         default:
    //             echo "Opção inválida!\n";
    //             break;
    //     }
    // }


    // //Exercício extra

    // $n1 = readline("Digite algo: ");
    // $n2 = readline("Digite outro valor: ");

    // function tipo($valor) {
    //     if (filter_var($valor, FILTER_VALIDATE_INT) !== false) {
    //         return "integer";
    //     } elseif (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false) {
    //         return "double"; 
    //     } elseif (is_numeric($valor)) {
    //         return "numeric string";
    //     } elseif (strtolower($valor) === "true" || strtolower($valor) === "false") {
    //         return "boolean";
    //     } else {
    //         return "string";
    //     }
    // }

    // $t1 = tipo($n1);            
    // $t2 = tipo($n2);

    // if ($t1 === $t2) {
    //     echo "$n1 é $t1 e $n2 é $t2, logo são do mesmo tipo\n";
    // } else {
    //     echo "$n1 é $t1 e $n2 é $t2, logo não são do mesmo tipo\n";
    // }

?>