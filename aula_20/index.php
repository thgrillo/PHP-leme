<?php

//criar o cookie
//setcookie("nome", "valor", tempo_de_vida);

//obter o valor de um cookie
//$_COOKIE["nome"];

//alterar cookie
//setcookie("nome", "valor_novo");

//deletar cookie
//setcookie("nome", "valor", time() - 1);

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch ($req){
    case 1:
        Criar();
        break;
    case 2:
        Ler();
        break;
    case 3:
        Alterar();
        break;    
    case 4:
        Deletar();
        break;  
}

function Criar(){
    echo "Criar";
    setcookie("nome", "Thiago", time() + 100);
}

function ler(){
    echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_STRING);
}

function Alterar(){
    echo "Alterar";
    setcookie("nome", "Grillo");
} 

function Deletar(){
    echo "Deletar";
    setcookie("nome", "Thiago", time() - 1);
}