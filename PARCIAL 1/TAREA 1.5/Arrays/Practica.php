<?php

        $numero_alumnos = rand(1, 1000);
        $calificaciones = array();

        # Llenado del arreglo con calificaciones aleatorias entre 0 y 10 para cada alumno
        for ($i = 0; $i < $numero_alumnos; $i++) {
            $calificaciones[] = rand(0, 10);
        }

        # Alumnos aprobados y reprobados
        $aprobados = 0;
        $reprobados = 0;

        # El foreach me ayuda a recorrer cada elemento del areglo y hace lo que le pida dentro de el
        foreach ($calificaciones as $calificacion) {
            if ($calificacion >= 6) {
                $aprobados++;
            } else {
                $reprobados++;
            }
        }
        echo "Aprobados: " . $aprobados . "<br>";
        echo "Reprobados: " . $reprobados . "<br>";


        # Calcular porcentaje de aprobados y reprobados
        $porcentaje_aprobados = ($aprobados / $numero_alumnos) * 100;
        echo "Porcentaje Aprobados: " . $porcentaje_aprobados . "%";


        $porcentaje_reprobados = ($reprobados / $numero_alumnos) * 100;
        echo "<br>";
        echo "Porcentaje Reprobados: " . $porcentaje_reprobados . "%";


        # Calcular el promedio de todas las calificaciones
        # El array_sum me ayuda a sumar todos los elementos del arreglo
        $total_calificaciones = array_sum($calificaciones);
        $promedio = $total_calificaciones / $numero_alumnos;
        $promedio_redondeado = number_format($promedio, 2);


        echo "<br>";
        echo "Promedio: " . $promedio_redondeado;

        # Desviacion estandar
        $sumatoria_cuadrados_diferencias = 0;
        foreach ($calificaciones as $calificacion) {
            $sumatoria_cuadrados_diferencias += pow($calificacion - $promedio, 2);
        }

        # Calcular la varianza
        $varianza = $sumatoria_cuadrados_diferencias / $numero_alumnos;

        # Calcular la desviación estándar
        $desviacion_estandar = sqrt($varianza);

        # Mostrar la desviación estándar
        echo "<br>";
        echo "Desviación estándar de todas las calificaciones: " . number_format($desviacion_estandar, 2);

        echo "<br>";

        # Creacion de la tabla html
        echo '<table border="1">';
        echo '<tr>';
        $count = 0;
        foreach ($calificaciones as $calificacion) {
            if ($count % 30 == 0 && $count != 0) {
                echo '</tr><tr>';
            }
            echo '<td>' . $calificacion . '</td>';
            $count++;
        }
        echo '</tr>';
        echo '</table>';

?>

