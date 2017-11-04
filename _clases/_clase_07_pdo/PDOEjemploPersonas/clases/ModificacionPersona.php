<?php

include_once ("Persona.php");

$nombre = isset($_POST['nombre']);
$apellido = isset($_POST['apellido']);
$nombreNuevo = isset($_POST['nombreNuevo']);
$apellidoNuevo = isset($_POST['apellidoNuevo']);
$edadNuevo = isset($_POST['edadNuevo']);

$personaRecuperada = Persona::recuperarPersonas();
if($nombre && $apellido){
    foreach($personaRecuperada as $persona){
        if($persona->getNombre() == $_POST['nombre'] && $persona->getApellido() == $_POST['apellido']){
            if($nombreNuevo){
                $persona->setNombre($_POST['nombreNuevo']);
            }
            if($apellidoNuevo){
                $persona->setApellido($_POST['apellidoNuevo']);
            }
            if($edadNuevo){
                $persona->setEdad($_POST['edadNuevo']);
            }
            $persona->modificarPersona();
            break;
        }
    }
    echo "Se modifico la persona.";
}else{
    echo "No se pudo modificar la persona, verifique parametros.";
}

?>