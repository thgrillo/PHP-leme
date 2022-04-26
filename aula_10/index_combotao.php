<?php
$nomes = ["Thiago", "Carol", "Clara"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
    <select id="membrosFamilia" name="membrosFamilia">
        <?php
        for ($i=0; $i < count($nomes); $i++) { 
            ?>
            <option value="<?= $i; ?>"> <?= $nomes[$i]; ?></option>
            <?php
        }
        ?>
    </select>   
    <button onclick="alert(document.getElementById('membrosFamilia').value);">Selecionar</button>
</body>
</html>