<?php

$s = sha1("Meu nome é Thiago.");
echo $s;

echo "<br>";

$m = md5("Hello, Hello");
echo $m;

echo "<br>";

$b = base64_encode("Senha123@");
echo $b;

echo "<br>";

echo base64_decode($b);

