<?php
$edades = array("Moises" => "33", "Camila" => "25", "Samanta" => "17");
echo("<br>Camila tiene: ".$edades["Camila"]." años<br>");

foreach($edades as $x => $valor){
    echo("<br>Nombre: ".$x."<br>Edad: ".$valor." años");
    echo("<br>");
}
