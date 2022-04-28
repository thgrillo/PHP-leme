<?php

$arrayFilmes = [
    "title" => "FilmeA",
    "sinopse" => "lorem ipsumn bla blabla",
    "ano" => 1998,
    "genero" => "comedia",
    "canais" => [
        "globo",
        "netflix",
        "sbt"
    ]
];

// var_dump($arrayFilmes);

$jsonstr = json_encode($arrayFilmes);
echo $jsonstr;

echo "<script>console.log('" . $jsonstr ."' );</script>";
