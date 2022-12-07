<?php

$qualASuaIdade = 6;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    
    echo "Criança";

}else if($qualASuaIdade < $idadeMaior){

    echo "Adolescente";

}else if($qualASuaIdade < $idadeMelhor){

    echo "É um Adulto";
}else{
    echo "Você está na melhor Idade";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)? "Menor de Idade":"Maior de Idade";

?>