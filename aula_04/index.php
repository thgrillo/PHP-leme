<?php

/* 
Operadores matemáticos:

+ adição
- subtração
* multiplicação
/ Divisão
% Resto da divisão

Resolve primeiro o que está entre () e depois *, /, +, -

*/
//echo (1+1) *3;

$adicao = 2+5;
$subtracao = 5-2;
$multilpicacao = 5*2;
$divisao = 5/2;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando o PHP</title>
</head>
<body>
    <p>2 + 5 = <?=$adicao?></p>
    <p>5 - 2 = <?=$subtracao?></p>
    <p>5 * 2 = <?=$multilpicacao?></p>
    <p>5 / 2 = <?=$divisao?></p>
    <br>

    <!-- outra forma de fazer -->
    <?= $adicao; ?>
    <br>

    <?= $subtracao; ?>
    <br>

    <?= $multilpicacao; ?>
    <br>

    <?= $divisao; ?>
    <br>


    <!-- operando com os resultados (17.5) -->
    <?= ($adicao * $divisao); ?>

</body>
</html>