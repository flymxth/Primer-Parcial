<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Condicionales if</h1>

</body>
</html>


<?php

    #EJEMPLO 1 CON IF
    $a = 35;
    $b = 30;

   
    if($a > $b){
        echo "El mayor es: ", $a, "<br>";
    }

    
    #EJEMPLO 2 CON IF(ELSE)
    if($a > $b){
        echo "El mayor es: ", $b, "<br>";
    }

    #EJEMPLO 3 CON IF Y ELSE
    if($a >= $b){
        echo "El mayor es: ", $a, "<br>";
    }
    else
    {
        echo "El mayor es: ", $b, "<br>";
    }



    #EJEMPLO 4 CON (IF ELSE IF)
    $estacion = "Verano";
    if($estacion == "Invierno"){
        echo("Invierno, del 21 de diciembre al 20 de marzo<br>");
    }
    else if($estacion == "Primavera"){
        echo "Primavera, del 21 de marzo al 20 de junio<br>";
    }
    else if($estacion == "Verano"){
        echo "Verano, del 21 de marzo al 20 de septiembre<br>";
    }
    else if($estacion == "Otoño"){
        echo "Otoño, del 20 de septiembre al 20 de diciembre<br>";
    }

?>