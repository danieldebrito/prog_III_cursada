<?php
include_once "persona.php";

class Profesor extends Persona {

	protected $_aula; 
		
		public function __construct($nombre, $apellido, $edad, $sexo, $aula){
			parent::__construct($nombre, $apellido, $edad, $sexo);
			$this->aula = $aula;
		}




}

?>