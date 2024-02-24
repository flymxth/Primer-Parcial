<?php

    $arreglo = array(4, 8, 3, 1, 9, 2, 0, 3, 6, 10, 20);
    $longitud = count($arreglo);

    echo "IMPRESION DEL ARREGLO: <br>";
    for($i = 0; $i < $longitud; $i++){
        echo $arreglo[$i] . ", ";
    }


    echo "<br>";
    echo "<br>";
    echo "ORDEN DEL ARREGLO: <br>";

    $t = count($arreglo);
    sort($arreglo);
    for($j=0; $j<$t; $j++)
    {
        echo $arreglo[$j] .", ";
    }


    echo "<br>";
    echo "<br>";
    echo "IMPRESION DEL ARREGLO DE MAYOR A MENOR: <br>";

   rsort($arreglo);

   foreach($arreglo as $elemento){
    echo $elemento . ", ";
   }


    echo "<br>";
    echo "<br>";
    echo "IMPRESION DE LOS NUMEROS PARES: <br>";

    foreach($arreglo as  $numero){
        if($numero % 2 == 0){
            echo $numero . ", ";
        }
    }



    echo "<br>";
    echo "<br>";
    echo "IMPRESION DE LOS NUMEROS IMPARES: <br>";

    foreach($arreglo as $numimp){
        if($numimp % 2 != 0){
            echo $numimp . ", ";
        }
    }

    echo "<br>";
    echo "<br>";
    echo "<br> USO DE ARRAY COUNT VALUES<br>";

    print_r(array_count_values($arreglo));



    echo "<br>";
    echo "<br>";
    echo "<br> USO DEL VAR DUMP <br>";

    print_r(var_dump($arreglo));

?>