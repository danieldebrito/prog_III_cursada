<?php
include_once "class.conexion.php";
include_once "class.consultas.php";

$mensaje = null;

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];

if(isset($nombre) && isset($descripcion) && isset($categoria) && isset($precio)){
    $consultas = new Consultas();
    $mensaje = $consultas->InsertarProductos($nombre, $descripcion, $categoria, $precio);
}else{
    echo "complete todos los campos";
}

echo $mensaje;

?>