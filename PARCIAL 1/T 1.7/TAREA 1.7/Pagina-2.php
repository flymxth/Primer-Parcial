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
                 <li>El programa solicita tres números, x, y, y z, como entrada y luego evalúa la función f(x,y,z) con estos valores. La salida del programa será el valor de la función redondeado a 6 decimales. Se puede utilizar la función "tofixed(numero,decimales)" para ajustar la salida decimal.
                 </li>
                </p>

              <h1>18710. Formulota</h1>

              <br>

              <form action="" method="post">
                X:
                <br>
                <input type="text" name="x"><br>
                Y:
                <br>
                <input type="text" name="y"><br>
                Z:
                <br>
                <input type="text" name="z"><br>
                <br>
                <input type="submit" name="Crear">
                <br>

                <?php

                    $x = $_POST["x"];
                    $y = $_POST["y"];
                    $z = $_POST["z"];
                    $f;

                    $numerador = (($x + $y) / (2 * $x)) + (($x ** 3 + $y ** 3) / ($x ** 2 + $y ** 2));
    
                    // Denominador de la fracción exterior
                    $denominador = $x ** 2 + $y ** 2 + $z ** 2;
                
                    // Valor de la función
                    $resultado = $numerador / $denominador;

                    echo "<br>";
                  
                    $resultado_redondeado = round($resultado, 6);
                    echo $resultado_redondeado;
                ?>
             </form>
            </div>
          </div>

          <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>


</body>
</html>
