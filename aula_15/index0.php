<?php
    $arrayNome = ["root", "user", "adm"];
    $nome = "";
    $email= "";
    $tipo = "";

    if (isset($_POST["textNome"])){
        $nome = $_POST["textNome"];
    }
    
    if (isset($_POST["textEmail"])){
        $email = $_POST["textEmail"];
    }

    if (isset($_POST["slTipo"])){
        $tipo = $arrayNome[$_POST["slTipo"]];
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