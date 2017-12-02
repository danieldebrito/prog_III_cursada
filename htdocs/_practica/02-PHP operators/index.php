<?php

$x = 10;
$y = 6;

echo $x++."</br>"; // primero imprime des pues incrementa, por lo tanto imprime 10
echo $x."</br>";  // imprime 11 ya incrementado
echo ++$x."</br>"; // imrementa y despues imprime, pues muestra la variable imcrementada 12

echo "operador xor   'o exclusivo'"."</br>";

echo "x  -  y  -  x xor y"."</br>";
echo "==========="."</br>";
echo "v  -  v   -      f   "."</br>";
echo "v  -  f   -      v   "."</br>";
echo "f  -  v   -      v   "."</br>";
echo "f  -  f   -      f   "."</br>";


if($x==12 xor $y==4)
echo "xor ok"; // muestra esto por ser v  - f
else
echo "xor not";

?>