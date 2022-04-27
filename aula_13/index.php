<?php

$salario = 7000.70;
$valorAjuste = 0;

//funções com parametro por referencia
function AjustarSalario($sal, &$valorAjuste){
    $valorAjuste = 300.00;
    return ($sal + $valorAjuste);
}
 
$valorFinal = AjustarSalario($salario, $valorAjuste);

echo "O valor ajustado é de: R$ <b>{$valorFinal}</b>, com aumento de R$ <b>{$valorAjuste}</b>.";