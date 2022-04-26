<?php

define("min", 17);
define("max", 31);

$idade = 29;
$acesso = true;
$acesso1 = false;

echo "MIN" . min . "<br>";
echo "MAX" . max . "<br>";
echo "Idade: " . $idade . "<br><br>";
if ($idade <= min && $idade >= max) {
    echo "Acesso Negado!";
} else {
    echo "Acesso Liberado!";
}

echo "<br><br>";

echo "Versão que estou usando do PHP: " . PHP_VERSION . "<br><br>";

/*
== igual
=== valor e tipo
!= diferente 
!== nao identico tipo ou valor
<> Diferente
< Menor
> Maior
<= Menor igual
>= Maior igual

&& e
|| ou
*/

//
if ($acesso){
    echo "Acesso marcado como true" . "<br>";
}

if (!$acesso1){
    echo "Pegando o false, negando";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
</head>
<body>
    <?php
    if ($acesso = true){
        ?>
        <p style="color: green;">Acesso autorizado!</p>
        <?php
    }
    ?>
</body>
</html>