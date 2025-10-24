<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
</head>
<body>
    <?php
        //Imprimir una tabla de multiplicar con for(){}
        //luego mejorarla para imprimir todas las tablas del 1 a 10

        for($i = 1; $i <= 10; $i++){

            echo("<h1>Tabla del ".$i."<br></h1>");
            for($x = 1; $x <=10; $x++){

                $resultado = $i * $x;
                echo($i." x ".$x." = ".$resultado."<br>");
                
            }
            echo("<br>");
        }
    ?>
    
</body>
</html>