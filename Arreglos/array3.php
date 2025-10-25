<?php

#aqui definimos el array compuesto de otros arrays en los cuales guardamos datoa de los productos con esta estructura (producto, precio, existencias)
$productos = array(array("Heladera",2500, 15), array("Microondas", 1200, 3), array("Cocina", 4500, 5), array("Horno", 3000, 12));

echo"<br>";

#En este bucle lo que hacemos es insertar en el documento los datos en cuestion, accediento a cada array y a sus respectivos indices mediante el array padre (el primer corchete es para el array padre y el segundo refiere al array hijo al cual referencia el padre)
for ($x = 0; $x < count($productos); $x++){
    print("<h1>".$productos[$x][0]."</h1>precio: ".$productos[$x][1]."<br>Stock: ".$productos[$x][2])."<br>";
}

echo"<hr>";

#Con este bucle tambien mostramos los elementos de la lista, solo que en un formato de lista
for($x = 0; $x < count($productos); $x++){
    print("<br>$x");
    for($y = 0; $y <3; $y++){
        print(" - ".$productos[$x][$y]);
    }
}

echo"<hr>";

foreach($productos as $p){
    foreach($p as $item){
        print("<br>".$item);
    }
}

echo"<hr>";