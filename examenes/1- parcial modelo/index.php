<?php
require_once "obj/cliente.php";
require_once "gestionArchivos/AccesoFiles.php";

// ejemplo get:
//http://localhost/_practica/06-modelo-parcial/index.php?nombre=aa&mail=bb&clave=cc&sexo=m

$c01 = new cliente($_GET['nombre'],$_GET['mail'],$_GET['clave'],$_GET['sexo']);

$path = "clientes/clientesActuales.txt";

AccesoFiles::WhriteSingleLineTxt($c01,$path);

$clientes = array();

$clientes = AccesoFiles::ReadAndRetArray();

var_dump($clientes);








?>