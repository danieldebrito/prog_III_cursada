<?php
class Fabrica{
    private $_empleados;
    private $_razonSocial;

    public function __construct($rz){
        $this->_razonSocial = $rz;
        $this->_empleados = array();
    }

    public function getEmpleados(){
        return $this->_empleados;
    }

    public function setEmpleados($empleados){
        $this->_empleados = $empleados;
    }



    public function agregarEmpleado($empleado){
        array_push($this->_empleados, $empleado);
        $this->EliminarEmpleadosRepetidos();
    }

    public function EliminarEmpleado($empleado){
        unset($this->_empleados[array_search($empleado, $this->_empleados)]);
    }

    private function EliminarEmpleadosRepetidos(){
        $this->_empleados = array_unique($this->getEmpleados(),SORT_REGULAR );
    }

    public function toString(){
        echo $this->_razonSocial."</br>";
        foreach($this->_empleados as $item)
        echo $item->toString()."</br>";
    }
}
?>