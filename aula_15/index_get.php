<?php
// ?nome=nome
// ?nome&idade=29
$nome = $_GET["nome"];
$email = $_GET["email"];
echo $nome . "<br>" . $email;