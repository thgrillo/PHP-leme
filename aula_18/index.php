<?php
//include chama o arquivo e se nao existir apresenta warning
//_once, se ja foi importado, não importa novamente.
//include é menos seguro pois mostra os caminhos do banco nos erros.
// include("gravar.php");
// include("ler.php");

//require_once não continua o codigo caso não encontre o arquivo.
 
require_once("gravar.php");
require_once("ler.php");

Gravar("Include", "file.txt");

// echo Leitura("file.txt");
$leiturafile = Leitura("file.txt");
echo $leiturafile;

