<?php

$jsonstr = '{"title":"FilmeA","sinopse":"lorem ipsumn bla blabla","ano":1998,"genero":"comedia","canais":["globo","netflix","sbt"]}';

$arrFilme = json_decode($jsonstr);

//var_dump($arrFilme);

echo "<p><b>Titulo:</b> ". $arrFilme->title ." </p>";
echo "<p><b>Sinopse:</b> ". $arrFilme->{"sinopse"} ."</p>";
echo "<p><b>Ano:</b> ". $arrFilme->ano ."</p>";
echo "<p><b>Genero:</b> ". $arrFilme->genero ."</p>";
echo "<p><b>Canais:</b> </p>";

for ($i=0; $i < count($arrFilme->canais); $i++) { 
    echo "<p>". $arrFilme->canais[$i] ."</p>";
}