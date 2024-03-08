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
                  El programa debe tomar una secuencia de siete bits como entrada y agregar un bit de paridad par al lado derecho de la secuencia de salida.
              </p>
              <br>
              <h1>4352. Bit de paridad</h1>
              <br>
              <form action="" method="post">
                NUMERO:
                <br>
                <input type="text" name="Numero"><br>
                <br>
                <input type="submit" name="Enviar">
                <br>

                <?php

                          $secuencia = $_POST["Numero"];
                          $N1 = substr_count($secuencia, '1');

                          $bit_paridad = ($secuencia[0] ^ $secuencia[1] ^ $secuencia[2] ^ $secuencia[3] ^ $secuencia[4] ^ $secuencia[5] ^ $secuencia[6]);

                          echo "<br>";
                          echo $bit_paridad;
                    
                ?>
            </div>
          </div>

          <br>
          <br>


          <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</body>
</html>