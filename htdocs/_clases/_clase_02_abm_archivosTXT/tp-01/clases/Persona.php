<?php
abstract class Persona{

    private $_apellido;
    private $_nombre;
    private $_dni;
    private $_sexo;

    public function __construct($apell, $nomb, $dni, $sex){
        $this->_apellido = $apell;
        $this->_nombre = $nomb;
        $this->_dni = $dni;
        $this->_sexo = $sex;
    }

    public function getApellido(){
        return $this->_apellido;
    }

    public function getNombre(){
        return $this->_nombre;
    }

    public function getDni(){
        return $this->_dni;
    }

    public function getSexo(){
        return $this->_sexo;
    }

    public abstract function hablar($idioma);

    public function toString(){
        return $this->_nombre." - ".$this->_apellido." - ".$this->_sexo." - ".$this->_dni;
    }
}
?>