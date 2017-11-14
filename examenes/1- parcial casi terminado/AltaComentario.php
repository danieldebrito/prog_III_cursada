<?php
include_once "aaaddb-Archivos.php";
include_once "Usuario.php";
include_once "Comentario.php";
/*3- (1pts.) AltaComentario.php: (por POST) se recive el email del usuario,  
el titulo del comentario y el comentario, si el mail existe en el archivo 
usuario.txt guarda en el archivo Comentario.txt.*/

$email = $_POST['email'];
$comentario = $_POST['comentario'];
$tituloComentario = $_POST['tituloComentario'];

$arrayUsr = array();
$arrayUsr = Gestionfiles::ReadAndRetArray("usuarios.txt");

$usr = Usuario::retUsuarioByMail($arrayUsr,$email);

$coment = new Comentario($tituloComentario, $comentario, $usr);


if($usr != null)
    Gestionfiles::SaveObj($coment,"Comentario.txt");

?>