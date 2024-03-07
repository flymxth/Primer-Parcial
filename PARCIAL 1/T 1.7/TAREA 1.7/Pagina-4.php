<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="detalles.css">
</head>
<body>
<header>
     <nav class="Cosilla">
        <h1><i class="fa-brands fa-brave"></i>TAREA 1.7</h1>
            <ul id="Menu">
              <li><a href="Inicio.php">Inicio</a></li>
              <li><a href="Pagina-1.php">Pagina 1</a></li>
              <li><a href="Pagina-2.php">Pagina 2</a></li>
              <li><a href="Pagina-3.php">Pagina 3</a></li>
              <li><a href="Pagina-4.php">Pagina 4</a></li>
            </ul>
     </nav>
   </header>


   <br>
   <br>
   <div class="contenedor-externo">
            <div class="Indicaciones">
                <h1>Indicaciones:</h1>
                <p>
                    <li>Dado un numero N realizar una piramide de asteriscos</li>

                    <br>

                   <li>Deberás imprimir como salida una escalera de dimensiones de largo N y de alto N</li>

                   <br>
              </p>

              <h1>11338. Escalera de asteriscos</h1>

              <br>

              <form action="" method="post">
                NUMERO DE ASTERISCOS:
                <br>
                <input type="text" name="Numero"><br>
                <br>
                <input type="submit" name="Crear">
                <br>

                <?php

                    $n = intval($_POST["Numero"]);
                    echo "<br>";

                    for ($i = 1; $i <= $n; $i++) {
                        // Imprime espacios en blanco antes de los asteriscos
                        echo str_repeat(" ", $n - $i);
                        
                        // Imprime asteriscos
                        echo str_repeat("* ", $i);
                        
                        // Salto de línea
                        echo "<br>";
                    }

                ?>
             </form>
            </div>
          </div>

          <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>


</body>
</html>
