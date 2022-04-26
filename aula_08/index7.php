<?php 
//testando o FOR no php

//printando 10 "oi"
// for ($i=0; $i < 10; $i++) { 
//     echo "oi". "<br>";
// }


//printando de 0 a 9 (10 prints)
// for ($i=0; $i < 10; $i++) { 
//     echo "Numero {$i}" . "<br>"; 
// }

// echo "<br>";

//printando de 1 a 10 (10 prints)
// for ($i=0; $i < 10; $i++) { 
//     $i1 = 1;
//     echo "Numero" . ($i+1) . "<br>"; 
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
    <h1>*7</h1>
    <?php 
    for ($i=0; $i < 11; $i++) { 
        echo "7x{$i} = " . (7*$i) . "<br>";
    }
    ?>
</body>
</html>