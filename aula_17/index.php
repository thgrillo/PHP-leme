<?php

// function Gravar(string $texto, string $myfile){
//     $fp = fopen($myfile, "a+");
//     fwrite($fp, $texto);
//     fclose($fp);
// }

// Gravar("persistencia em arquivo texto!", "file.txt");

function Gravar(string $texto, string $myfile){
    $fp = fopen($myfile, "a+");
    fwrite($fp, "{$texto} <br>\r\n");
    fclose($fp);
}

Gravar(date("H:i:s"), "file1.txt");

function Leitura(string $myfile){
    $fp = fopen($myfile, "r");
    $texto = fread($fp, filesize($myfile));
    fclose($fp);
    return $texto;
}

echo Leitura("file1.txt");