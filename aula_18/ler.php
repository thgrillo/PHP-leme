<?php

function Leitura(string $myfile){
    $fp = fopen($myfile, "r");
    $texto = fread($fp, filesize($myfile));
    fclose($fp);
    return $texto;
}


?>