<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php
    $temperatura = 0;
    while($temperatura <= 100){
        echo("<br><p style='background-color:rgb(0,$temperatura, $temperatura)'>");
        $temperatura++;

    }
    ?>
</body>
</html>