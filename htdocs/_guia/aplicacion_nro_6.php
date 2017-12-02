Aplicación Nº 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número 
(utilizar la función rand). Mediante una estructura condicional, 
determinar si el promedio de los números son mayores, menores o iguales que 6. 
Mostrar un mensaje por pantalla informando el resultado.


<?php

$array = [];
$acum = 0;

for($i = 0 ; $i<5 ; $i++)
    $array[$i] = rand(0,10);

    echo var_dump($array);

    for($i = 0 ; $i<5 ; $i++)
        $acum += $array[$i];

echo "promedio = ".($acum/5)."</br>";

    if($acum/5 == 6)
    echo "promedio igual a 6";
    if($acum/5>6)
    echo "promedio mayor a 6";
    if($acum/5<6)
    echo "promedio menor a 6";

?>