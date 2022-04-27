<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19</title>
</head>
<body>
    <form method="POST">
        <ul>
            <li>User<input type="text" name="txtUser" /></li>
            <li>Pass<input type="text" name="txtPass" /></li>
            <li><input type="submit" name="btnSubmit" value="Entrar" /></li>
        </ul>
    </form>
    <?php
    echo "user: " . filter_input(INPUT_POST, "txtUser", FILTER_SANITIZE_STRING);
    echo "<br>";
    echo "pass: " . md5(filter_input(INPUT_POST, "txtPass", FILTER_SANITIZE_STRING));

    ?>
</body>
</html>