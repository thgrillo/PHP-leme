<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for with for inside</title>
</head>
<body>
    <h1>Tabuada 1 ao 10</h1>
    <ul>
        <?php
        for ($i=1; $i < 11; $i++) { 
            for ($j=1; $j < 11; $j++){
                ?>
                <li> <?= $i ?> * <?= $j ?> = <?= ($i*$j) ?></li>
                <?php
            }
            echo "<br>";
        }
        ?>
    </ul>
</body>
</html>