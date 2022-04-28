<?php

    $req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
    $arquivo = "cep.txt";

    switch ($req) {
        case 1:
            $cep = filter_input(INPUT_POST, "txtCEP", FILTER_SANITIZE_STRING);
            $logradouro = filter_input(INPUT_POST, "txtLogradouro", FILTER_SANITIZE_STRING);
            $complemento = filter_input(INPUT_POST, "txtComplemento", FILTER_SANITIZE_STRING);
            $bairro = filter_input(INPUT_POST, "txtBairro", FILTER_SANITIZE_STRING);
            $localidade = filter_input(INPUT_POST, "txtLocalidade", FILTER_SANITIZE_STRING);
            $uf = filter_input(INPUT_POST, "txtUf", FILTER_SANITIZE_STRING);
            $ibge = filter_input(INPUT_POST, "txtIbge", FILTER_SANITIZE_STRING);
            $gia = filter_input(INPUT_POST, "txtGia", FILTER_SANITIZE_STRING);
            $ddd = filter_input(INPUT_POST, "txtDDD", FILTER_SANITIZE_STRING);
            $siafi = filter_input(INPUT_POST, "txtSiafi", FILTER_SANITIZE_STRING);
            $str = "CEP:{$cep}|Logradouro:{$logradouro}|Complemento:{$complemento}|Bairro:{$bairro}|Localidade:{$localidade}|UF:{$uf}|Ibge:{$ibge}|Gia:{$gia}|DDD:{$ddd}|Siafi:{$siafi}";
            $fp = fopen($arquivo, "w");
            if (fwrite($fp, "{$str}")) {
                echo "1";
            } else {
                echo "0";
            }
            fclose($fp);
            break;
        
        case 2:
            $fp = fopen($arquivo, "r");
            $texto = fread($fp, filesize($arquivo));
            fclose($fp);
            echo $texto;
            break;
        
        default:
            echo "pass";
            break;
    }
?>