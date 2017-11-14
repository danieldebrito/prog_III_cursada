<?php

include_once ("Persona.php");

$nombre = isset($_POST['nombre']);
$apellido = isset($_POST['apellido']);

$personaRecuperada = Persona::recuperarPersonas();
if($nombre && $apellido){
    foreach($personaRecuperada as $persona){
        if($persona->getNombre() == $_POST['nombre'] && $persona->getApellido() == $_POST['apellido']){
            
            $persona->borrarPersona();
            break;
        }
    }
    echo "Se borro la persona.";
}else{
    echo "No se pudo borrar la persona, verifique parametros.";
}

?>