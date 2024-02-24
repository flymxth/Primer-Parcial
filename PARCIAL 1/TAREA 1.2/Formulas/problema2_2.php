<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>12618. Practicando con formulas</h1>
    Dado un valor real "a", quieres resolver una serie de 
    ecuaciones hasta obtener el valor de "z". <br>
    <br>

    x = 3a + 15 <br>
    <br>
    y = x + 3 / x + 1 <br>
    <br>
    z = 5x + 7y / axy <br>
    <br>


    <h1>Entrada</h1>
    Un real "a". Puedes suponer que 1 <= a <= 100.

    <h1>Salida</h1>
    Un real que sea el valor de z impreso con 
    tres puntos decimales.

    <h1>Ejemplo</h1>

    <table border = "2" cellspacing = "3" cellpading = "3" class = "datos">

        <tr>
            <th colspan = "20">Entrada</th>
            <th colspan = "20">Salida</th>
        </tr>

        <tr>
           <td colspan="20"><center>33.562</center></td>
           <td colspan="20"><center>0.148</center></td>
        </tr>

        <tr>
            <td colspan="20"><center>72.569</center></td>
            <td colspan="20"><center>0.069</center></td>
        </tr>

        <tr>
            <td colspan="20"><center>64.835</center></td>
            <td colspan="20"><center>0.077</center></td>
        </tr>
    </table>

    <br>

    <form action="" method="post">
    VALOR DE A:
    <input type="text" name="ValA"><br>
    <input type="submit" name="">

    <?php

        $a = $_POST["ValA"];
        $x = 3 * $a + 15;
        $y = ($x + 3) / ($x + 1);
        $z = (5 * $x + 7 * $y) / ($a * $x * $y);

        $redondeado = round($z, 3);
        echo "El valor de Z es: ".$redondeado



    ?>

    
</body>
</html>