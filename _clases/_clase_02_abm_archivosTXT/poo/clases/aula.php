<?php
include_once "alumno.php";
include_once "profesor.php";

class Aula
{
protected $alumnos = array();
protected $profesor;

public function __construct($profesor)  
{
    $this->profesor = $profesor;
}

function cargarObjetos($alumno){
    array_push($this->alumnos , $alumno); 
}

function getAlumnos(){
    return $this->alumnos;
}

function buscarAlumnoByNombre($nombre){
    foreach($this->getAlumnos() as $alumnoEnAula){
        if($alumnoEnAula->nombre == $nombre)
            return true;
    }
    return false;
}





}
?>