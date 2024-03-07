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
                    <li>Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.</li>
                    
                    <br>

                    <li>Ocho reales x1,y1 x2,y2 x3,y3 x4,y4. Los vértices se listan ordenados en el sentido de las manecillas del reloj.</li>

                    <br>

                    <li>Un real que sea la longitud del lado más corto del cuadrilátero. Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta.</li>
                </p>

                
                    <h1>7093. El lado más corto</h1>

                    <form action="" method="post">
                    X1:
                    <br>
                    <input type="text" name="X1">
                    <br>
                    Y1:
                    <br>
                    <input type="text" name="Y1">
                    <br>
                    X2:
                    <br>
                    <input type="text" name="X2">
                    <br>
                    Y2:
                    <br>
                    <input type="text" name="Y2">
                    <br>
                    X3:
                    <br>
                    <input type="text" name="X3">
                    <br>
                    Y3:
                    <br>
                    <input type="text" name="Y3">
                    <br>
                    X4:
                    <br>
                    <input type="text" name="X4">
                    <br>
                    Y4:
                    <br>
                    <input type="text" name="Y4">

                    <br>
                    <br>
                    <input type="submit" name="Enviar">

                    <?php
                    
                        $x1 = $_POST["X1"];
                        $y1 = $_POST["Y1"];
                        $x2 = $_POST["X2"];
                        $y2 = $_POST["Y2"];
                        $x3 = $_POST["X3"];
                        $y3 = $_POST["Y3"];
                        $x4 = $_POST["X4"];
                        $y4 = $_POST["Y4"];
                        $a;
                        $b;
                        $c;
                        $d;
                        
                        $a = sqrt((pow($x2-$x1,2))+(pow($y2-$y1,2)));
                        $b = sqrt((pow($x3-$x2,2))+(pow($y3-$y2,2)));
                        $c = sqrt((pow($x4-$x3,2))+(pow($y4-$y3,2)));
                        $d = sqrt((pow($x4-$x1,2))+(pow($y4-$y1,2)));

                        if($a<$b && $a<$c && $a<$d){
                          echo $a;
                        }
                        else if ($b<$c && $b<$d){
                            echo $b;
                        }
                        else if (c<d){
                            echo $c;
                        }
                        else{
                            echo $d;
                        }
                        
                        echo "El resultado es: " . $a . "<br>";
                        echo "El resultado es: " . $b . "<br>";
                        echo "El resultado es: " . $c . "<br>";
                        echo "El resultado es: " . $d . "<br>";
                        
                    ?>

    
               

                <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</html>
</body>
