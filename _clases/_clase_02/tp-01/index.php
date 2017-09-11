<?php
require_once "clases\Empleado.php";
require_once "clases\Fabrica.php";
require_once "clases\GestionArchivos.php";

$fabrica00 = new Fabrica("code utn s.a.");
$emp00 = new Empleado("Ramone", "Joey", 2525456, "M", 00, 28000 );
$emp01 = new Empleado("Ramone", "Marky", 2525456, "M", 01, 28000 );
$emp02 = new Empleado("Ramone", "CJ", 2525456, "M", 02, 28000 );
$emp03 = new Empleado("Ramone", "Jhonny", 2525456, "M", 03, 28000 );

$fabrica00->agregarEmpleado($emp00);
$fabrica00->agregarEmpleado($emp01);
$fabrica00->agregarEmpleado($emp02);
$fabrica00->agregarEmpleado($emp00);
$fabrica00->agregarEmpleado($emp00);
$fabrica00->agregarEmpleado($emp03);
$fabrica00->toString();

echo "</br>"."elimino un empleado: "."</br>"."</br>";

$fabrica00->EliminarEmpleado($emp00);
$fabrica00->toString();


foreach($fabrica00->getEmpleados() as $emp){
    GestionArchivos::WhriteSingleLineTxt($emp);
}

echo "</br>"."nueva fablica"."</br>"."</br>";
$fabrica01 = new Fabrica("code utn 2 s.a.");
$fabrica01->setEmpleados(GestionArchivos::ReadAndCharge());
$fabrica01->toString();

?>