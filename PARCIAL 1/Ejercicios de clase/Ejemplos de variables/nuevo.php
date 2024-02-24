<html>
    <body>
        
            VERIFICAR OPERADORES DE ASIGNACION <hr>
            <?php

                $x = 5;
                $y = 1;
                echo "Valores x, y: ", $x, " ", $y , "<br>";


                #OPERADORES DE DECREMENTO
                $x += $y; #EQUIVALE A $X=$X+$Y

                echo "Ahora el valor de X es: ", $x, "<br>";

                $x -= $y; #EQUIVALE A $X=$X-$Y
                echo "Ahora el valor de X es: ", $x, "<br>";

                
                #OPERADORES DE DECREMENTO <br>
                $a = $x++;

                #EN LA PAGINA SI ME IMPRIME 5 Y ENSEGUIDA 6, ES POR QUE PRIMERO IMPRIME 
                #EL VALOR DE X QUE ES = 5, Y SI LUEGO IMPRIME 
                #EL 6 ES POR QUE LE INCREMENTA UNO
                
                echo "a x: ", $a, " ", $x, "<br>";

                $a = ++ $x;

                #SI EN LA PAGINA ME IMPRIME DOS 7 SEGUIDOS, ES POR QUE ME IMPRIME 
                #EL VALOR DE X INCREMENTADO EN 1, QUE SERIA 7, Y EL OTRO 7 ES 
                #POR QUE A LA VARIABLE QUE LE ASIGNE X, SE LE PASO

                echo "a x: ", $a, " ", $x, "<br>";


                if($a==$x and $x%2==1)
                {
                    echo "CUMPLE LA CONDICION <BR>";
                }
                
                #BUSCA EL MAYOR DE LOS NUMEROS
                echo max (2,4,6,8,10000);

            ?>


    </body>
</html>