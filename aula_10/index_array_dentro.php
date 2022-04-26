<?php

//array associativo
/*
$arrayNotas = array(
    "aluno1" => 10,
    "aluno2" => 7,
    "aluno3" => 6,
    "aluno4" => 8,
    "aluno5" => 4,
);

echo $arrayNotas["aluno5"];
*/

//mais complexo
$arrayNotas = array(
    "aluno1" => array(
        "nome" => "Thiago",
        "nota" => 10
    )
);

echo $arrayNotas["aluno1"]["nome"] . ", ";
echo $arrayNotas["aluno1"]["nota"];