<?php
require_once "clases\Persona.php";

class Empleado extends Persona{

    private $_legajo;
    private $_sueldo;

    public function __construct($apell, $nomb, $dni, $sex, $leg, $sueldo){
        parent::__construct ($apell, $nomb, $dni, $sex);
        $this->_legajo = $leg;
        $this->_sueldo = $sueldo;
    }

    public function getLegajo(){
        return $this->_legajo;
    }

    public function getSueldo(){
        return $this->_sueldo;
    }

    public function hablar($idioma){
        return "El empleado habla ".$idioma;
    }

}
?>