<?php

abstract class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $sexo;

    public function __construct($nombre, $apellido, $edad, $sexo) {
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
       $this->sexo = $sexo;
    }

public function Mostrar()
{
    return "Nombre: " . $this->nombre . "Apellido: " . $this->apellido . "Edad: " . $this->edad . "Sexo: " . $this->sexo;
}




} 
?>