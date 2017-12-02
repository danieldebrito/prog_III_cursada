<?php
include_once "persona.php";

class Alumno extends Persona {

		protected $aula; 

		public function __construct($nombre, $apellido, $edad, $sexo, $aula){
			parent::__construct($nombre, $apellido, $edad, $sexo);
			$this->aula = $aula;
		}
public function Mostrar()
{
    return "Nombre: " . $this->nombre . "Apellido: " . $this->apellido . "Edad: " . $this->edad . "Sexo: " . $this->sexo;
}
         
}

?>