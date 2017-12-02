<!-- recibe por post el nombre, precio y foto del producto, guardar la foto con el nombre del producto -->
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/RepasoDeParcial/ejercicio dos/producto.php";

if(isset($_POST['nombre'])){
    $p01 = new producto($_POST['nombre'], 33);  
    var_dump($p01);
}

else{
        echo "No esta seteado";     
}


if(isset($_FILES['img'])){

    echo "esta seteado";
}
else{
        echo "No esta seteado";     
}

$im = imagecreatefromjpeg($_FILES[])



?>

