Aplicación Nº 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

<?php
$cadena = "hola";

for($i = strlen($cadena)-1;$i>-1;$i--)
{
    $arrayRetorno[] = $cadena[$i];
}
echo "<h3>"."palabra invertida"."<br>";
foreach($arrayRetorno as $item)
    echo $item;
echo "</h3>";
?>