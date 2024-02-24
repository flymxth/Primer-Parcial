<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO DE SUMA</title>
</head>
<body>


<form action="" method="post">

    NUMERO 1:
    <input type="text" name="numero1"><br>

    NUMERO 2:
    <input type="text" name="numero2"><br>

    <input type="submit" name="">

</form>

</body>

<?php

    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $suma = $num1 + $num2;

    echo "La suma es: " .$suma;

?>
</html>>