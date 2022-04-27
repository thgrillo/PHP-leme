<?php $arrNotas = [
    "aluno1" => [
        "nome" => "Thiago",
        "nota" => 7
    ],
    "aluno2" => [
        "nome" => "Carol",
        "nota" => 8
    ],
    "aluno3" => [
        "nome" => "Clara",
        "nota" => 10
    ],
    "aluno4" => [
        "nome" => "Kiara",
        "nota" => 9
    ],
];


foreach ($arrNotas as $aluno){
    foreach ($aluno as $chave => $valor){
        echo "{$chave} = {$valor} <br>";
    }
}
