<?php
$cars = array("Volvo", "BMW", "Toyota", "Fiat", "Volkswagen");
//$MiArray = ["dd","aa","ff"]; otra forma
var_dump($cars);
echo "<BR>";

array_push($cars,"Maseratti");

var_dump($cars);
echo "<BR>";
//var_dump($MiArray);

foreach($cars as $x)
{
    //echo "<BR>".$x;
    echo "<BR> $x"; // concatena automatico
    // echo '<BR> $x'; // muestra el nombre dse la variables
}
    


?>