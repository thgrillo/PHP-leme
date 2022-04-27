<?php

//teste função simples
function meuNome($nome) {
    return "Meu nome é {$nome}";

}

echo meuNome("Thiago");

//teste função com parametros
function meuNome($nome, $email) {
    return "Meu nome é {$nome} e meu email é {$email}";

}

echo meuNome("Thiago", "th@th.com");


//setando email na função
function meuNome($nome, $email = "teste@default.com") {
    return "Meu nome é {$nome} e meu email é {$email}";

}

echo meuNome("Thiago");