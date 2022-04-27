<?php

$nome = "Thiago Del Nery Grillo";

//striptags tira formataçao do html
$msg = strip_tags("<h1>Bem-vindo</h1><a href=''>teste</a>", "<h1> <a>");

$comida = "Banana, Maça, Pera, Uva";

// mostra string completa
echo substr($nome, 0) . "<br>";

// mostra sem o T = hiago Grillo
echo substr($nome, 1) . "<br>";

// mostra primeira letra da string = T
echo substr($nome, 0, 1) . "<br>";

echo strtolower($nome) . "<br>";

echo strtoupper($nome) . "<br>";

echo $msg . "<br>";

//vai trocar banana por morango na variavel comida (case sensitive)
echo str_replace("Banana", "Morango", $comida) . "<br>";

//vai trocar banana por morango na variavel comida (no case sensitive)
echo str_ireplace("banana", "Morango", $comida) . "<br>";

// vai remover todos espaços da variavel nome e mostrar somente o "Thiago" (cria um array)
$ex = explode(" ", $nome);
echo $ex[0] . "<br>";

// mostra o numero de catacteres na string informada
echo strlen($nome) . "<br>";