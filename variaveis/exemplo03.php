<?php
   
    $nome = "Hcode";
    $site = 'www.hcode.com.br';

    $ano = 1990;
    $salario = 5500.99;
    $bloqueado = false;

    $frutas = array("abacaxi", "laranja", "manga");

    echo $frutas[2] , " /br";

    $nascimento = new DateTime();

    var_dump($nascimento);

    $arquivo = fopen("exemplo.php", "r");


    var_dump($arquivo);

    $nulo = null;
?>