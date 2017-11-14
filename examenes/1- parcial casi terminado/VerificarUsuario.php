<?php
include_once "aaaddb-Archivos.php";
include_once "Usuario.php";

/*2- (1pts.) VerificarUsuario.php: (por POST) Se ingresa email y clave, 
si coincide con algún registro del archivo usuarios.txt retornar “Bienvenido”. 
De lo contrario informar si el usuario existe o si es error de clave.*/

$email = $_POST['email'];
$clave = $_POST['clave'];
$flag = true;


$arrayUsr = array();
$arrayUsr = Gestionfiles::ReadAndRetArray("usuarios.txt");

$usr = Usuario::retUsuario($arrayUsr, $email, $clave);

/*foreach($arrayUsr as $usr){

    if($email == $usr->GetEmail() && $clave == (int)$usr->GetClave()){
        echo "BIEMVENIDO";
        $flag = false;
        break;
    }

    if($email == $usr->GetEmail() && $clave != (int)$usr->GetClave()){
        echo "CLAVE INVALIDA";
        $flag = false;
        break;
    }

    if($email != $usr->GetEmail() && $clave == (int)$usr->GetClave()){
        echo "EMAIL INVALIDO";
        $flag = false;
        break;
    }
}

if($flag){
    echo "EL USUARIO NO EXISTE";
}*/
?>