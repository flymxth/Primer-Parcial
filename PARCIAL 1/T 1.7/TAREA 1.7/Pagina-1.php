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
                    <li>Dado un numero N realizar las siguientes actividades.
                    Si el valor de N es par, dividelo entre 2. En caso contrario
                    sumale 1.</li>

                    <br>

                   <li>Si el valor actual de N tiene tres o mas cifras, dividelo entre 100.
                   Pero si tiene exactamente 2 cifras dividelo entre 10.</li>

                   <br>

                    <li>Si el valor actual de N es un múltiplo de tres, réstale uno.</li>

                   <br>

                   <li>Escribe un programa que te ayude a calcular el valor final de N y el 
                   número de veces que N fue modificado.</li>
              </p>

              <br>

              <div class="contenedor-externo">
            <div class="Indicaciones">
                <h1>7050. Cálculos condicionales</h1>
                
                <form method="post" action="" class="Calculos condicionales">
        
                        NUM ENTERO:
                        <input type="text" name="Numero" class="Num-Entero"><br>
                        <br> 
                        <input type="submit" value="Sumar" name="sumar" class="Button">
                </form>
            </div>
          </div>

          <?php

              $N = $_POST["Numero"];
              $Modificaciones = 0;

              if($N % 2 == 0)
              {
                  $N = $N / 2;
              }

              else
              {
                $N = $N + 1;
              }

             if ($N >= 100) 
             {
              $N = $N / 100;

            } 
            else if ($N >= 10 && $N < 100) 
            {
                $N = $N / 10;
            }

            if ($N % 3 === 0) 
            {
                $N = $N - 1;
            }

            $Modificaciones++;

           echo "Veces Modificado: " . $Modificaciones . "<br>";
           echo "Valor Actual: " . $N  . "<br>";

              



          ?>
                    
            </div>
          </div>

          <br>

          

   <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>