<?php

    $a = array();
    $n = rand(10, 100);  #Genera un numero aleatorio del 0 al 10
    echo "Random: ". $n;
    echo "<br>";
    
    for($i = 1; $i <= $n; $i++){ #Ciclo para llenar el arreglo con numeros aleatorios
        array_push($a, rand(1, 100));
    }

    echo "Datos generados: " . $n . "<br>";


             #Imprime de 10 en 10 los numeros
    for($i = 0; $i < $n; $i++){
        echo $a[$i] . "-";
        if(($i+1) % 20 == 0){
            echo "<br>";
        }
    }

?>