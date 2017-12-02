<h3>Aplicación Nº 3 (Obtener el valor del medio)</h3>
<p>Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que
muestre el contenido de aquella variable que contenga el valor que se encuentre en el 
medio de las tres variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio” </p><br>

<?php
$flag = true;
echo "valor de a: ".$a = rand(0,15);
echo "<br>";
echo "valor de b: ".$b = rand(0,15);
echo "<br>";
echo "valor de c: ".$c = rand(0,15);
echo "<br>";

if((($a>$b) && ($a<$c)) || (($a>$c) && ($a<$b)))
{
    echo "medio: ".$a;
    echo "<br>";
    $flag = false;
}
if((($b>$a) && ($b<$c)) || (($b>$c) && ($b<$a)))
{
    echo "medio: ".$b;
    echo "<br>";
    $flag = false;
}
if((($c>$a) && ($c<$b)) || (($c>$b) && ($c<$a)))
{
    echo "medio: ".$c;
    echo "<br>";
    $flag = false;
}
if($flag == true)
    echo "no hay medio";
?>