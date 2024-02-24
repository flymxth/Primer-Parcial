<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estylo.css">
</head>
<body>
    
<h1>12662. C16</h1><br>

<h1>Descripcion</h1>
OMIJal se ha encontrado con una variante en el Concurso ACM, 
pues el numero de programadores que conforman un equipo puede variar, 
entonces modifica tu programa anterior pues ahora deberás preguntar el numero 
de 3 integrantes por equipo, al final indica 
cuantos equipos puedenformarse y 
cuantos programadores quedan fuera 

<br>

<h1>Entrada</h1>
Dos números que representen el número de programadores y el número de programadores por equipo.

<br>

<h1>Salida</h1>
Salida con el número de equipos formados y los estudiantes sin equipo, escrito exactamente como en el ejemplo.

<h1>Ejemplo</h1>

<table border="2" cellspacing = "3" cellpading = "3" class = "datos">

        <tr>
            <th colspan = "20">Entrada</th>
            <th colspan = "20">Salida</th>
        </tr>

        <tr>
           <td colspan="20"><center>5</center></td>
           <td colspan="20"><center>Equipos formados: 1</center></td>
        </tr>

        <tr>
           <td colspan="20"><center>4</center></td>
           <td colspan="20"><center>Estudiantes sin equipo: 1</center></td>
        </tr>

        <tr>
           <td colspan="20"><center>18</center></td>
           <td colspan="20"><center>Equipos formados: 6</center></td>
        </tr>

        <tr>
           <td colspan="20"><center>3</center></td>
           <td colspan="20"><center>Estudiantes sin equipo: 0</center></td>
        </tr>


</table>

<br>
<form action="" method="post">
    VALOR DE EQUIPOS FORMADOS:
    <input type="text" name="Equipos"><br>

    PROGRAMADORES:
    <input type="text" name="Programadores"><br>
    <input type="submit" name="">

    <?php

        $NumProgramadores = $_POST["Programadores"];
        $NumEquipos = $_POST["Equipos"];

        $equiposFormados = $NumEquipos / $NumProgramadores;
        $programadoresSinEquipo = $NumEquipos % $NumProgramadores;

        echo " <br> Equipos formados: ", $equiposFormados;
        echo "<br> Estudiantes sin equipo: ", $programadoresSinEquipo;
    ?>


</body>
</html>