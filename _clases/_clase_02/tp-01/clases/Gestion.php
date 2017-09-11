<?php
include_once "Fabrica.php";

//$auto  = new Vehiculo($_POST['patente']);
//$accion = ($_POST['accion']);
$accion = ("Guardar");


if($accion == "Guardar"){
    Estacionamiento::Guardar($auto);
}
if($accion == "Sacar"){
    Estacionamiento::Sacar($auto);
}


?>