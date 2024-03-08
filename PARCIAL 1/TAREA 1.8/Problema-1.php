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
                  dada una cadena de texto separada con un guion, imprimir las iniciales de cada pedazo de palabra por ejemplo 'Luis-Antonio' sus iniciales son 'LA' 
              </p>

              <h1>4886. Autores</h1>
              <br>
              
              <form action="" method="post">
                PALABRA:
                <br>
                <input type="text" name="nombre_largo"><br>
                <br>
                <input type="submit" name="Enviar">
                <br>

                <?php
                   
                      $nombre_largo = $_POST['nombre_largo'];

                      $iniciales = '';
                      $partes = explode('-', $nombre_largo);
                      foreach ($partes as $parte) {
                          $iniciales .= strtoupper($parte[0]);
                      }
                      echo "<br>";
                      echo $iniciales;
                ?>
            </div>
          </div>

          <br>
          <br>
      

          <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</body>
</html>