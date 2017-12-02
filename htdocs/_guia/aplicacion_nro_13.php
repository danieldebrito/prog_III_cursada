Aplicación Nº 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). 
La función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además 
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas: 
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$palabra = ($_POST['palabra']);
$max = 13;
$palabrasValidas = array("Recuperatorio", "Parcial", "Programacion");

var_dump($palabra);

function ValidaPalabra($palab){
    global $palabrasValidas;
    foreach($palabrasValidas as $item)
        if($item == $palab){
            return 1;
        }   
    return 0;
}

echo ValidaPalabra($palabra);

?>
    
</body>
</html>
