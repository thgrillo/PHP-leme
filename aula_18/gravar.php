<?php

function Gravar(string $texto, string $myfile){
    $fp = fopen($myfile, "a+");
    fwrite($fp, "{$texto} <br>\r\n");
    fclose($fp);
}


?>