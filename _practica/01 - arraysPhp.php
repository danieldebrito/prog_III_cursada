Ejemplo #1 Un array simple

<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// a partir de PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array);
?>



La clave puede ser un integer o un string. El valor puede ser de cualquier tipo.

Además, se darán los siguientes amoldamientos de clave:

    Un strings que contenga un integer válido será amoldado al tipo integer. P.ej. la clave "8" en realidad será almacenada como 8. Por otro lado "08" no será convertido, ya que no es un número integer decimal válido.
    Un floats también será amoldado a integer, lo que significa que la parte fraccionaria se elimina. P.ej., la clave 8.7 en realidad será almacenada como 8.
    Un booleano son amoldados a integers también, es decir, la clave true en realidad será almacenada como 1 y la clave false como 0.
    Un null será amoldado a un string vacío, es decir, la clave null en realidad será almacenada como "".
    Los arrays y los objects no pueden utilizarse como claves. Si se hace, dará lugar a una advertencia: Illegal offset type.

Si varios elementos en la declaración del array usan la misma clave, sólo se utilizará la última, siendo los demás son sobrescritos. 


<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?>
