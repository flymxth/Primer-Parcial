<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body> 
<header>
     <nav class="Cosilla">
        <h1><i class="fa-brands fa-brave"></i>TAREA 1.8</h1>
            <ul id="Menu">
              <li><a href="Inicio.php">Inicio</a></li>
              <li><a href="Problema-1.php">Problema 1</a></li>
              <li><a href="Problema-2.php">Problema 2</a></li>
              <li><a href="Problema-3.php">Problema 3</a></li>              
            </ul>
     </nav>
   </header>

   <br>
   <br>
          <div class="contenedor-externo">
            <div class="Indicaciones">
                <h1>Indicaciones:</h1>
                <p>
                  Contar las veces que aparece la d en una cadena de texto, que es la palabra favorita de miguel
              </p>

              <h1>3991. Adquisición de Letras</h1>
              <br>
              <form action="" method="post">
                TEXTO:
                <br>
                <input type="text" name="texto"><br>
                <br>
                <input type="submit" name="Enviar">
                <br>

                <?php

                  $palabra = $_POST['texto'];
                  $letra = 'd';

                  $contador = substr_count($palabra, $letra);

                  echo "<br>";

                  echo "Cantidad de veces que aparece: " . $contador;

              ?>
            </div>
          </div>

          <br>
          <br>


          <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</body>
</html>