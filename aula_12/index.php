<?php
    function Ajuste($p1, $p2){
        return (($p1 * $p2) / 4);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>
<body>
    <ul>
        <?php
        for ($i = 0; $i < 10; $i++){
            ?>
            <li><?= Ajuste($i, ($i*6)) ?></li>
            <?php
        }
        ?>
</body>
</html>