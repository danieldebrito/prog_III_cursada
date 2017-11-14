<?php
include_once "aaaddb-Archivos.php";
include_once "Usuario.php";

/*1- (1pt.) UsuarioCarga.php: (por GET)se ingresa nombre,
email, perfil (“admin” o “user”), edad y clave. Se guardan
los datos en en el archivo de texto usuarios.txt, tomando 
el mail como identificador .*/

//ejemplo de pasaje por get para postman
//http://localhost/parcial/UsuarioCarga.php?nombre=Daniel&email=dani@gmail.com&perfil=admin&edad=38&clave=1254 

$u1 = new Usuario($_GET['nombre'],$_GET['email'],$_GET['perfil'],$_GET['edad'],$_GET['clave']);

Gestionfiles::SaveObj($u1,"usuarios.txt");





?>