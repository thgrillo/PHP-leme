<?php

function AbrirConexao(){
    $connection = new PDO("mysql:host=localhost;dbname=cursophp;charset=utf8", 'root', '');
    return $connection;
}
?>