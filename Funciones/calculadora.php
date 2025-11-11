<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
    <form method="get" action="calculadora.php" autocomplete="off">
        <input type="text" name="numero1" value="" autocomplete="off">
        <input type="text" name="numero2" value="" autocomplete="off">
        <button type="submit">Sumar</button>
    </form>

    <hr>

    <?php
        if (isset($_GET['numero1']) && isset($_GET['numero2'])){

            $n1 = $_GET['numero1'];
            $n2 = $_GET['numero2'];

            if(!empty($n1) && !empty($n2)){
                $suma = $n1 + $n2;

                echo("<br>El resultado es: $suma");

            }else{
                echo("<br>Rellene los campos");
            }
        }
    
    
    
    ?>

<br>
<hr>

</body>
</html>