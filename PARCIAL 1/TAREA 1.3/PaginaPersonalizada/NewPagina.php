<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estyle.css">
</head>
<body>
    
    <div class="Titulo">
        <div class="Icono">
            <i class="fa-solid fa-feather"></i>
            <span class="text">5630. Colegiatura</span>
        </div>
    </div>

    <br>



    <div class="Descripcion"><br>
            <i class="fa-solid fa-paper-plane"></i>
            <span class="text">Descripción:</span>
    </div>



       <br>

       <div class="Acomodo-del-parrafo">
            <span class="text">
                La mamá de Esteban busca ayuda para calcular cuánto pagará en la mejor <br>
                preparatoria de Cuernavaca. La colegiatura se basa en el número de materias, <br> 
                a $1600 cada una. Hay un descuento del 30% sin IVA si el promedio es 9 o <br>
                más, si no, se paga la colegiatura completa con un 16% de IVA. <br>
            </span>
       </div>


       <br>

       <div class="Entrada"><br>
            <i class="fa-solid fa-thumbtack"></i>
            <span class="text">Entrada:</span>
       </div>


       <br>


       <div class="Acomodo-del-parrafo2">
            <span class="text">
                El numero de materias A que Esteban va a cursar. <br>
                Y un numero con decimales B que es el <br>
                 promedio de Esteban. <br>
            </span>
       </div>
    
       <br>

       <div class="Salida"><br>
            <i class="fa-solid fa-right-to-bracket"></i>
            <span class="text">Salida:</span>
       </div>


       <br>


       <div class="Acomodo-del-parrafo3">
            <span class="text">
                Un numero entero C <br>
                con el precio a pagar. <br>
                Debe de ir con un $. <br>
            </span>
       </div>


       <table border="2" cellspacing="3" cellpading="3" class="Datos">
            <tr>
                    <th colspan="20"> Entrada </th>
                    <th colspan="20"> Salida </th>

            </tr>

            <tr>

                    <td colspan="20"><center>5<br>9.6</center></td>
                    <td colspan="20"><center>$5600</center></td>

            </tr>

            <tr>
                    <td colspan="20"><center>8<br>7.8</center></td>
                    <td colspan="20"><center>$14848</center></td>
            </tr>

            <tr>
                    <td colspan="20"><center>2<br>8</center></td>
                    <td colspan="20"><center>$3712</center></td>
            </tr>
       </table>




            <form action="" method="post">
            NUMERO DE MATERIAS:
            <input type="text" name="Materias"><br>

            CALIFICACION DEL ALUMNO:
            <input type="text" name="Calificacion"><br>

            <input type="submit" name="">

            

            <?php

                $NumMaterias = $_POST["Materias"];
                $Calificacion = $_POST["Calificacion"];
                $Precio_Materia = 1600;

                $Colegiatura_total = $NumMaterias * $Precio_Materia;

                if($Calificacion >= 9){
                    $Precio_Descuento = $Colegiatura_total * 0.3;
                    $Precio_total = $Colegiatura_total - $Precio_Descuento;
                }

                else{
                    $Iva = $Colegiatura_total * 0.16;
                    $Precio_total = $Colegiatura_total + $Iva;
                }

                echo "El precio a pagar es: $".$Precio_total;

            ?>

    

<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>