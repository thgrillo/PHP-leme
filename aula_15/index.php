<?php
    //melhorando o codigo anterior

    $arrayNome = ["root", "user", "adm"];
    $nome = filter_input(INPUT_POST, "textNome", FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST, "textEmail", FILTER_SANITIZE_STRING);
    $tipocod = filter_input(INPUT_POST, "slTipo", FILTER_SANITIZE_NUMBER_INT);
    $tipo = "";

    if ($tipocod){
        $tipo = $arrayNome[$tipocod];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15</title>
</head>
<body>
    <form method="POST">
        <ul>
            <li>Nome<input type="text" name="textNome" /></li>
            <li>Email<input type="text" name="textEmail" /></li>
            <li>Tipo
                <select name="slTipo">
                    <?php
                    for ($i=0; $i < count($arrayNome); $i++) { 
                        ?>
                        <option value="<?= $i; ?>"><?=$arrayNome[$i]; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </li>
            <li><input type="submit" name="btnSubmit" value="Enviar" /></li>
        </ul>
    </form>
    <hr>
    <ul>
        <li>Nome: <?= $nome; ?></li>
        <li>Email: <?= $email; ?></li>
        <li>Tipo: <?= $tipo; ?></li>
    </ul>
</body>
</html>