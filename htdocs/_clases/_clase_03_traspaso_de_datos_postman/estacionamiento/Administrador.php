<?php
include_once "Estacionamiento.php";

//Estacionamiento::cargarEstacionados();

$auto  = new Vehiculo("ABC123");

$accion = "Sacar";

if($accion == "Guardar"){
    Estacionamiento::Guardar($auto);
}
if($accion == "Sacar"){
    Estacionamiento::Sacar($auto);
}




?>