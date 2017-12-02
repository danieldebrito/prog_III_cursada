<?php
include_once "Estacionamiento.php";

$auto  = new Vehiculo($_POST['patente']);
$accion = ($_POST['accion']);

if($accion == "Guardar"){
    Estacionamiento::Guardar($auto);
}
if($accion == "Sacar"){
    Estacionamiento::Sacar($auto);
}


?>