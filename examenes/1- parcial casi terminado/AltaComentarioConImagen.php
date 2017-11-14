<?php
include_once "aaaddb-Archivos.php";
include_once "Usuario.php";
include_once "Comentario.php";
include_once "ComentarioIMG.php";

/*4- (2pts.) AltaComentarioConImagen.php: con imagen,
guardando la imagen con el titulo del comentario en
la carpeta /ImagenesDeComentario.*/

$email = $_POST['email'];
$comentario = $_POST['comentario'];
$tituloComentario = $_POST['tituloComentario'];
$img = $_FILES['archivo'];

$info = new SplFileInfo($_FILES['archivo']['name']);
$_FILES['archivo']['name'] = $tituloComentario.".".$info->getExtension();
$destino = "ImagenesDeComentario/".$_FILES['archivo']['name'];

$arrayUsr = Gestionfiles::ReadAndRetArray("usuarios.txt");
$usr = Usuario::retUsuarioByMail($arrayUsr,$email);

$coment = new ComentarioIMG($tituloComentario, $comentario, $usr, $destino);


move_uploaded_file($_FILES['archivo']['tmp_name'], $destino);

if($usr != null)
Gestionfiles::SaveObj($coment,"Comentario.txt");

?>