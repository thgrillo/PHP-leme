<?php

/*Variaveis que não funcionam 
$nome-completo */

$nomecompleto = "Variavel recebe um valor."; //string
$idade = 29;
$salario = 1000000; //integer
$salario1 = 10.000; //double

echo $nomecompleto;
echo "<br>";

//pegar o tipo da variavel
echo  gettype($nomecompleto);
echo "<br>";

echo  gettype($idade);
echo "<br>";

echo gettype($salario);
echo "<br>";

echo gettype($salario1);
echo "<br>";
