<?php
$cep = filter_input(INPUT_GET, "cep");
$cep = str_replace("-", "", $cep);

$str = file_get_contents("https://viacep.com.br/ws/". $cep . "/" . "json/");

$arrCEP = json_decode($str);

if ($arrCEP != null){
    echo "<p><b>CEP: </b> ". $arrCEP->cep ."</p>";
    echo "<p><b>Logradouro: </b> ". $arrCEP->logradouro ."</p>";
    echo "<p><b>Complemento: </b> ". $arrCEP->complemento ."</p>";
    echo "<p><b>Bairro: </b> ". $arrCEP->bairro ."</p>";
    echo "<p><b>Localidade: </b> ". $arrCEP->localidade ."</p>";
    echo "<p><b>Uf: </b> ". $arrCEP->uf ."</p>";
    echo "<p><b>Ibge: </b> ". $arrCEP->ibge ."</p>";
    echo "<p><b>Gia: </b> ". $arrCEP->gia ."</p>";
    echo "<p><b>DDD: </b> ". $arrCEP->ddd ."</p>";
    echo "<p><b>Siafi: </b> ". $arrCEP->siafi ."</p>";
}

?>