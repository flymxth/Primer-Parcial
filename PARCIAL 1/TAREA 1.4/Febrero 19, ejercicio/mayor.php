<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estyle.css">
</head>
<body>
    <div class="Titulo">
        <h1>Mayor de 3</h1>
    </div>

    <div class="Descripcion">
        <h1>Descripcion:</h1>
        <p>
            Realiza un problema que imprima el mayor de
            tres numeros.
        </p>
    </div>

    <div class="Salida">
        <h1>Salida:</h1>
        <p>
            Escribe tres numeros enteros a,b y c
        </p>
    </div>

    <h1>Ejemplo</h1>

    <table border="2" cellspacing="3" cellpading="3" class="Datos">
        <tr>
            <th colspan="20">Entrada</th>
            <th colspan="20">Salida</th>
        </tr>

        <tr>
            <th colspan="20">10 <br> 8 <br> -7 <br></th>
            <th colspan="20">10</th>
        </tr>


        <tr>
            <th colspan="20">10 <br> 81 <br> 101 <br></th>
            <th colspan="20">101</th>
        </tr>


        <tr>
            <th colspan="20">11 <br> 11 <br> 11</th>
            <th coslpan="20">11</th>
        </tr>
    </table>



    <form action="" method="post">
    PRIMER NUMERO:
    <input type="text" name="Numero1"><br>

    SEGUNDO NUMERO:
    <input type="text" name="Numero2"><br>

    TERCER NUMERO:
    <input type="text" name="Numero3"><br>

    <input type="submit" name="">




    <?php

        $Num1 = $_POST["Numero1"];
        $Num2 = $_POST["Numero2"];
        $Num3 = $_POST["Numero3"];

        if($Num1 > $Num2 and $Num1 > $Num2)
        {
            echo "El mayor es: ".$Num1;
        }
        else if($Num2 > $Num1 and $Num2 > $Num3)
        {
            echo "El mayor es: ".$Num2;
        }
        else if($Num3 > $Num1 and $Num3 > $Num2)
        {
            echo "El mayor es: ".$Num3;
        }
        else if($Num1 == $Num2 and $Num1 == $Num3)
        {
            echo "El mayor es: ".$Num1;
        }
        else if($Num2 == $Num1 and $Num2 == $Num3)
        {
            echo "El mayor es: ".$Num2;
        }
        else if($Num3 == $Num1 and $Num3 == $Num2)
        {
            echo "El mayor es: ".$Num3;
        }
        echo "<br>-------------------------------------------------------------------------------------------------------------------------------------------------";

    ?>

    <br>

    <div class="Title">
        <h1>7294. ¿Cuántos valen 7?</h1>
    </div>

    <div class="Descrip">
        <h1>Descripcion</h1>
        <p>
            Escribe un programa que lea dos enteros
            e imprima cuántos de ellos valen 7.
        </p>
    </div>

    <div class="Entrada">
        <h1>Entrada</h1>
        <p>
            Dos enteros en el rango de -1000 a +1000.
        </p>
    </div>

    <div class="Salid">
        <h1>Salida</h1>
        <p>
            La cantidad de enteros iguales a 7.
        </p>
    </div>

    <h1>Ejemplo:</h1>


    <table border = "2" cellspacing = "3" cellpading = "3" class = "Datos">

        <tr>
            <th colspan="20"> Entrada </th>
            <th colspan="20"> Salida </th>
        </tr>

        <tr>
            <td coslpan="20"><center>-3 8</center></td>
            <td colspan="20"><center>0</center></td>
        </tr>

        <tr>
            <td colspan="20"><center>7 57</center></td>
            <td colspan="20"><center>1</center></td>
        </tr>

        <tr>
            <td colspan="20"><center>62 7</center></td>
            <td colspan="20"><center>1</center></td>
        </tr>

        <tr>
            <td colspan="20"><center>7 7</center></td>
            <td colspan="20"><center>2</center></td>
        </tr>

    </table>


    <form action="" method="post">
    
    NUMERO 1:
    <input type="text" name="Numero1"><br>

    NUMERO 2:
    <input type="text" name="Numero2"><br>

    <input type="submit" name="">


        <?php

            $Numero1 = $_POST["Numero1"];
            $Numero2 = $_POST["Numero2"];

            if($Numero1 == 7 and $Numero2 == 7){
                echo "2";
            }
            else if($Numero1 != 7 and $Numero2 == 7){
                echo "1";
            }
            else if($Numero2 != 7 and $Numero1 == 7){
                echo "1";
            }
            else{
                echo "0";
            }

            echo "<br>-------------------------------------------------------------------------------------------------------------------------------------------------";
        ?>

        <div class="Name">
            <h1>13433. Estaciones del Año</h1>
        </div>

        <div class="Desc">
            <h1>Descripcion</h1>
            <p>
                Brithany está aprendiendo a combinar programación y inglés. 
                Quiere desarrollar un programa que determine la estación del 
                año según 
                una fecha dada. 
                Para esto, utilizará estructuras de control selectivas para comparar 
                la fecha con los rangos que definen cada estación: invierno, primavera, 
                verano y otoño.
            </p>
        </div>

        <div class="puntos">
            <ul>
                <li>Winter del 21 de diciembre al 20 de marzo</li>
                <li>Spring del 21 de marzo al 21 de junio</li>
                <li>Summer del 22 de junio al 22 de septiembre</li>
                <li>Fall del 23 de septiembre al 20 de diciembre</li>
            </ul>
        </div>

        <div Class="Oracion">
            <p>
                Considerando la siguiente cantidad de días para cada mes:
            </p>
        </div>

        <div class="puntos2">
            <ul>
                <li>Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días</li>
                <li>Abril, Junio, Septiembre y Noviembre 30 días</li>
                <li>Febrero 28 días</li>
                <li>Cualquier fecha fuera de estos rangos debe considerarse como no existente</li>
            </ul>
        </div>

        <div class="Entradaa">
            <h1>Entrada</h1>
            <p>
                Dos números enteros d y m separados por un espacio que corresponden 
                al día y mes de una fecha determinada
            </p>
        </div>

        <div class="Salidaa">
            <h1>Salida</h1>
            <p>
                Una cadena S que indique la estación del año a la que pertenece la fecha 
                ingresada o un mensaje que indique no existe la fecha, 
                si la fecha no es válida
            </p>
        </div>

        <h1>Ejemplo:</h1>

        <table border = "2" cellspacing = "3" cellpading = "3" class = "Datos">
            <tr>
                <th colspan="20">Entrada</th>
                <th colspan="20">Salida</th>
            </tr>

            <tr>
                 <th colspan="20"><center>15 10</center></th>
                 <th colspan="20"><center>fall</center></th>
            </tr>

            <tr>
                 <th colspan="20"><center>22 3</center></th>
                 <th colspan="20"><center>spring</center></th>
            </tr>

            <tr>
                 <th colspan="20"><center>31 4</center></th>
                 <th colspan="20"><center>No existe la fecha</center></th>
            </tr>
        </table>

        <br>
    
     <form action="" method="post">
    
    DIA:
    <input type="text" name="dia"><br>

    MES:
    <input type="text" name="mes"><br>

    <input type="submit" name="">

    <?php

        $Dia = $_POST["dia"];
        $mes = $_POST["mes"];

        if($Dia < 1 || $mes < 1 || $mes > 12){
            echo "La fecha no es valida";
        }

        if(($mes == 12 && $Dia >= 21) || ($mes == 3 && $Dia <= 20))
        {
            echo "Winter";
        }
        else if(($mes == 3 && $Dia >= 21) || ($mes == 6 && $Dia <= 21))
        {
            echo "Spring";
        }
        else if(($mes == 6 && $dia >= 22) || ($mes == 9 && $dia <= 22))
        {
            echo "Summer";
        }
        else if(($mes == 9 && $dia >= 23) || ($mes == 12 && $dia <= 20))
        {
            echo "Fall";
        }
        else
        {
            echo "no existe la fecha";
        }
    
    ?>

    
   
</body>
</html>