Ejemplo #1 Un array simple

<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
var_dump($array);


// a partir de PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array);

//  key + dato
/*'foo' => string 'bar' (length=3)
  'bar' => string 'foo' (length=3)*/  // muestra esto
?>

La clave puede ser un integer o un string. El valor puede ser de cualquier tipo.

Además, se darán los siguientes amoldamientos de clave:

    Un strings que contenga un integer válido será amoldado al tipo integer. P.ej. la clave "8" en realidad será almacenada como 8. Por otro lado "08" no será convertido, ya que no es un número integer decimal válido.
    Un floats también será amoldado a integer, lo que significa que la parte fraccionaria se elimina. P.ej., la clave 8.7 en realidad será almacenada como 8.
    Un booleano son amoldados a integers también, es decir, la clave true en realidad será almacenada como 1 y la clave false como 0.
    Un null será amoldado a un string vacío, es decir, la clave null en realidad será almacenada como "".
    Los arrays y los objects no pueden utilizarse como claves. Si se hace, dará lugar a una advertencia: Illegal offset type.

Si varios elementos en la declaración del array usan la misma clave, sólo se utilizará la última, siendo los demás son sobrescritos. 

////////////////////////////////////////////////////////////////////////
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",  
    true => "d", // toman todos el indice uno
);
var_dump($array);

echo "</br>"."</br>";
?>
/////////////////////////////////////////////////////////////////////////
<?php
$p[0] = 1;
$p[1] = 5;
$y[2] = 8;
$y[3] = 9;
$u[4] = 10;

var_dump($p);
var_dump($y);
var_dump($u);
echo "</br>"."</br>";
?>
///////////////////////////////////////////////////////////////////////////
<?php
$cars = array("Volvo", "BMW", "Toyota");

var_dump($cars);
echo count($cars);  // cantidad

/*
C:\xampp\htdocs\_practica\01 - arraysPhp.php:68:
array (size=3)
  0 => string 'Volvo' (length=5)
  1 => string 'BMW' (length=3)
  2 => string 'Toyota' (length=6)
*/
echo "<br>"."<br>";
?>
///////////////////////////////////////////////////////////////////////////
<?php  // mostrar con for y con foreach 
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
echo "</br>";
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>"."<br>";
foreach($cars as $item) {
    echo $item;
    echo "<br>";
}
echo "<br>"."<br>";
?> 
///////////////////////////////////////////////////////////////////////////

// indices desordenados, no anda con for<br>
<?php
$p[0] = 1;
$p[1] = 5;
$p[8] = 8;
$p[99] = 9;
$p[2] = 10;

foreach($p as $item) {
    echo $item;
    echo "<br>";
}



echo "<br>"."<br>";
?>