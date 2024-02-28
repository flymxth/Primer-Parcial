<!DOCTYPE html>
<html>
<head>
    <title>Suma de Conjuntos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1 class="Titulo">2765. Sumando dos conjuntos
        <i class="fa-brands fa-slack"></i>
    </h1>
    <hr>
    <h1> <i class="fa-solid fa-shrimp"></i> Descripcion </h1>
    <p>
            Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos.  <br>
            1<=N<=100. Por ejemplo, sea N=4: <br>
            2 3 4 5 <br>
            6 7 1 3 <br>
            El resultado de sumarlos es: <br>
            8 10 5 8 <br>
        </p>
    <h1><i class="fa-solid fa-right-from-bracket"></i>Entrada</h1>
    <p>
        En la primera línea el entero N. En la segunda línea, separados por un espacio, los números del primer conjunto. En la tercera línea también separados por un espacio, los números del segundo conjunto.
    </p>

    <h1><i class="fa-solid fa-neuter"></i>Salida </h1>
    <p>
         Los números resultantes de sumar ambos conjuntos, separados por un espacio.
    </p>

    <h1><i class="fa-solid fa-martini-glass-citrus"></i> Ejemplo: </h1>

    <table border="2" cellspacing="3" cellpading="3" class="Datos">
            <tr>
                    <th colspan="20"> Entrada </th>
                    <th colspan="20"> Salida </th>
                    <th colspan="20"> Descripcion</th>

            </tr>

            <tr>
                    <th colspan="20">
                        4 <br>
                        2 3 4 5 <br>
                        6 7 1 3
                    </th>

                  
                    <th colspan="20"> 8 10 5 8 </th>

                    <th colspan="20">2+6, 3+7, 4+1, 5+3</th>
            </tr>

    </table>

    <br>

    <form method="post" action="">
        
        TAMAÑO   :
        <input type="text" name="tamaño" class="Tamaño"><br>
        <br>
        ARREGLO 1:
        <input type="text" name="arreglo1" class="Arreglo1"><br>
        <br>
        ARREGLO 2:
        <input type="text" name="arreglo2" class="Arreglo2"><br>
        <br> 
        <input type="submit" value="Sumar" name="sumar" class="Button">
    </form>

    <?php
   
        # Función para sumar dos conjuntos de enteros
        function sumarConjuntos($N, $conjunto1, $conjunto2) {
            $resultado = array();

            
            for ($i = 0; $i < $N; $i++) {
                $resultado[$i] = $conjunto1[$i] + $conjunto2[$i];
            }
            echo "<br>";
            # Implode: convierte un arreglo en una cadena de texto
            echo "El resultado de la suma es: " . implode(' ', $resultado);
        }

        # Obtener los datos del formulario
        $N = intval($_POST['tamaño']); # Tamaño de los arreglos
        $conjunto1 = array_map('intval', explode(' ', $_POST['arreglo1']));
        $conjunto2 = array_map('intval', explode(' ', $_POST['arreglo2']));


        sumarConjuntos($N, $conjunto1, $conjunto2);
    ?>

<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</body>
</html>
