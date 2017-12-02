Aplicación Nº 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
 Luego imprimir (utilizando la estructura for) cada uno en una línea distinta 
 (recordar que el salto de línea en HTML es la etiqueta <br/>).
 Repetir la impresión de los números utilizando las estructuras while y foreach.


 <?php

$array = [];

for($i = 0 ; $i<100 ; $i++)
{
    if($i%2 != 0)
    {
        $array[] = $i;
    }
    
if(count($array)==10)
    break;
}

echo "<br>"."<br>"."imprimo con var dump"."</br>";
echo var_dump($array);

echo "imprimo con for"."</br>";

for($i = 0 ; $i<count($array) ; $i++)
    echo $array[$i]."</br>";

echo "imprimo con while"."</br>";

    $i=0;
    while($i!=10)
        echo $array[$i++]."</br>";
    
echo "imprimo con foreach"."</br>";
    
    foreach($array as $item)
        echo $item."</br>";
 ?>