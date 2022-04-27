<?php

date_default_timezone_set("America/Sao_Paulo");

//data
echo date("d/m/y") . "<br>";
//Horas
echo date("h:i:s") . "<br>";

//Data e hora
echo date("d/m/y h:i:s") . "<br>";

//formato do mysql
echo date("Y-m-d h:i:s") . "<br>";

$hora = date("H");

if ($hora > 0 && $hora <= 5){
    echo "Boa madrugada!";
} elseif ($hora >= 6 && $hora <= 12){
    echo "Bom dia!";
} elseif ($hora >= 13 && $hora <= 18){
    echo "Boa tarde";
} else {
    echo "Boa noite!";
}