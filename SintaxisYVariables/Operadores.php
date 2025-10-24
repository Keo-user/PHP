<?php
//Variables: snake_case, camelCasel, PascalCase
$nombreApellido = "Jorge Alvarez";
$a = 8;
$b = 3;
echo"<h3>Operaciones Artimeticas</h3>";
echo"A = ".$a." y B = ".$b;
echo"<br>La suma de A + B es ".($a+$b);
echo"<br>La resta de A - B es ".($a-$b);
echo"<br>La multiplicacion de A * B es ".($a*$b);
echo"<br>La division de A / B es ".($a/$b);
echo"<br>A exponente B es ".($a**$b);
echo"<br>El resto entre A y B es ".($a%$b);
?>

<?php
$x = 8;
$y = 3;
echo"<h3>Operadores de comparacion</h3>";
echo"X = ".$x," y Y = ".$y;
echo"<br>¿X es igual a Y?".($x == $y);
echo"<br>¿X es distinto a Y?".($x != $y);
echo"<br>¿X es mayor a Y?".($x > $y);
echo"<br>¿X es menor a Y?".($x < $y);
echo"<br>¿X es menor o igual a Y?".($x <= $y);
echo"<br>¿X es mayor o igual a Y?".($x >= $y);
?>

<?php
echo"<h3>Operadores logicos y o negacion</h3>";
echo"<br>A es igual B y X es mayor a Y".($a == $b && $x > $y); //False
echo"<br>A es igual B o X es igual a Y".($a == $b || $x > $y); //False
echo"<br>Negar(A es igual a X)".!($a == $x);//False

