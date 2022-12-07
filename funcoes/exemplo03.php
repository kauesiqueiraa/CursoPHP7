<?php

function ola($texto = "Mundo", $periodo){

    return "Olá $texto! $periodo!<br>";

}

echo ola("Mundo", "Bom dia");
echo ola("Glaucio", "Boa Noite!");
echo ola("João", "Boa Tarde");

?>