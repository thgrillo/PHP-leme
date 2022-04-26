<?php
// array
$nomes = array("Thiago", "carol", "Clarinha");

//echo $nomes[0]; //printa Thiago


//repetindo manualmente 
// for ($i=0; $i < 4; $i++) { 
//     echo $nomes[$i] . "<br>";
// }

//usando a função count() pra identificar o tamanho do array

    for ($i=0; $i < count($nomes); $i++) { 
        echo $nomes[$i] . "<br>";
    }
?>