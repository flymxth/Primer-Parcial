<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Descripción</h1>
    Escribe un programa que solicite las calificaciones de Matemáticas, Español y Cocina y nos de su promedio.

    <h1>Entrada</h1>
    Tres números reales

    <h1>Salida</h1>
    Un número real representado el promedio de los tres números

    <h1>Ejemplo</h1>

    <table border = "2" cellspacing = "3" cellpading = "3" class = "Datos">

        <tr>
            <th colspan="20"> Entrada </th>
            <th colspan="20"> Salida </th>

        </tr>

        <tr>

            <td colspan="20"><center>10 9.5 9.0</center></td>
            <td colspan="20"><center>9.5</center></td>
           
        </tr>

    </table>

    <br>

    <form action="" method="post">
    CALIFICACION 1:
    <input type="text" name="Numero1"><br>

    CALIFICACION 2:
    <input type="text" name="Numero2"><br>

    CALIFICACION 3:
    <input type="text" name="Numero3"><br>

    <input type="submit" name="">



        <?php

            $num1 = $_POST["Numero1"];
            $num2 = $_POST["Numero2"];
            $num3 = $_POST["Numero3"];

            $promedio = $num1 + $num2 + $num3;
            $Cal = $promedio / 3;

            echo "El promedio es: " .$Cal

        ?>

    </form>


</body>
</html>