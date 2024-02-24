<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>12655. C09</h1>
    <h1>Descripcion</h1>
    Escribe un programa que solicite las calificaciones 
    de Matemáticas, Español y Cocina y nos de su promedio.

    <h1>Entrada</h1>
    Pide dos numeros enteros

    <h1>Salida</h1>
    mostrar el resultado de la multiplicacion de los numeros pedidos


    <h1>Ejemplo</h1>


    <table border="2" cellspacing = "3" cellpading = "3" class = "Datos">

        <tr>
            <th colspan="5"> Entrada </th>
            <th colspan="5"> Salida </th>
            <th colspan="5"> Descripcion</th>
        </tr>

        <tr>

            <td colspan="3">5 2</td>
            <td colspan="7">10</td>
            <td colspan="6">Al primer entero se multiplica el segundo, y muestra el producto</td>

        </tr>

        <tr>

           <td colspan="3">20 100</td>
           <td colspan="7">200</td>

        </tr>

        
    </table>
    <br>

<form action="" method="post">

    NUMERO 1:
    <input type="text" name="Numero1"><br>

    NUMERO 2:
    <input type="text" name="Numero2"><br>

    <input type="submit" name="">



    <?php

    $num1 = $_POST["Numero1"];
    $num2 = $_POST["Numero2"];
    $multiplicacion = $num1 * $num2;

    echo "La multiplicacion es: " .$multiplicacion;

    ?>


</form>
</body>


</html>