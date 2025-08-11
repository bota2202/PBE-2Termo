<?php 

    echo"Olá!\n";
    $nome="Otávio";
    $idade=16;
    $ano_atual=2025;

    $data_nasc=$ano_atual - $idade;
    echo "\n$nome, você nasceu em $data_nasc.\n";

?>

// Exercício 1

<?php 

    $nome="Otávio";
    $idade=16;

    echo"Seu nome é $nome e você tem $idade anos.\n";

?>

// Exercício 2

<?php 

    $frase="Programação em php";
    
    echo"$frase\n";

    echo "\n" .mb_strtoupper($frase)."\n" ;

    echo "\n" .strtolower($frase)."\n" ;

?>

// Exercício 3

<?php 

    $frase3="O PHP foi criado em mil novecentos e noventa e cinco";

    $frase3 = str_replace(["o", "O", "a", "i"], ["0", "0", "4", "1"], $frase3);

    echo"$frase3";

?>