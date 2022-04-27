<?php

//cookie navegador
//session servidor

session_start();

$_SESSION["key"] = date("H:i:s");

echo $_SESSION["key"];