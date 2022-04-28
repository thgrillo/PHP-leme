<?php

require_once("func.php");

try{
    AbrirConexao();
    echo "conexão bem sucedida!<br>";
    echo "<script>console.log('conexão bem sucedida!' );</script>";
} catch (PDOException $ex){
    echo "<b>Mensagem: </b>" . $ex->getMessage() . "<br>"; 
    echo "<b>Linha: </b>" . $ex->getLine() . "<br>"; 
    echo "<b>File: </b>" . $ex->getFile() . "<br>"; 
} finally{
    echo "<script>console.log('try catch finalizado' );</script>";
}