<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <?php
        $edad = 20;
        if($edad >= 18 && $edad <= 80){
            echo("Eres mayor de edad");
        }else if($edad <= 17 && $edad >= 11){
            echo("Eres menor de edad");
        }else{
            echo("Algo anda mal :(");
        }
    ?>
    
</body>
</html>