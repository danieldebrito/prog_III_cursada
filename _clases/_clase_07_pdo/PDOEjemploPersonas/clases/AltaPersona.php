<?php

include_once ("Persona.php");

$nombre = isset($_POST['nombre']);
$apellido = isset($_POST['apellido']);
$edad = isset($_POST['edad']);

if($nombre && $apellido && $edad){
    $persona = new Persona();
    $persona->setNombre($_POST['nombre']);
    $persona->setApellido($_POST['apellido']);
    $persona->setEdad((int)$_POST['edad']);
    $persona->insertarPersona();
    echo "Se grabo bien";
}else{
    echo "No se pudo insertar los datos";
}

?>