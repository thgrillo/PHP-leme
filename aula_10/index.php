<?php

//array
$arr = [];

//loop pra adc itens no array
for ($i=0; $i < 100; $i++) { 
    $arr[] = $i;
}

//printa todos itens
for ($i=0; $i < 100; $i++) { 
    echo $arr[$i] . "<br>";
}

//multiplica por 2 cada linha

echo "<br><br>";

for ($i=0; $i < 100; $i++) { 
    echo ($arr[$i]*2) . "<br>";
}