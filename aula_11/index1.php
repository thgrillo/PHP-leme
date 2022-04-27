<?php $arrFrutas = [
    1 => "Banana",
    2 => "Uva",
    3 => "Abacaxi",
    4 => "Uva"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
    <?php
    foreach ($arrFrutas as $valor){
        ?>
        <li><?= $valor ?></li>
        <?php
    }
    ?>
</body>
</html>