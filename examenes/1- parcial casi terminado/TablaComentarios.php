<?php
include_once "aaaddb-Archivos.php";
include_once "Usuario.php";
include_once "ComentarioIMG.php";
include_once "grilla.php";


/* 5- (2pt.) TablaComentarios.php, puede recibir datos 
del comentario como el usuario, el titulo o nada para 
hacer una busqueda, y retornará una tabla con: 
(la imagen del comentario, el titulo , la edad del usuario y el nombre )*/

$isSetEmail = isset($_POST["email"]) ? TRUE : FALSE;
$isSetTitulos = isset($_POST["titulo"]) ? TRUE : FALSE;

if($isSetEmail)
    $email = $_POST['email'];
if($isSetTitulos)
    $titulo = $_POST['titulo'];

$arrayRet = array();

if ($isSetEmail && $isSetTitulos) {
    $arrayComentIMG = ComentarioIMG::ReadAndRetArrayComentIMG("Comentario.txt");


    foreach ($arrayComentIMG as $coment) {
        if ($coment->GetUsuario()->GetEmail() == $email && $coment->GetTituloComentario() == $titulo) {
            array_push($arrayRet, $coment);
        }//if
    }//foreach
}

if ($isSetEmail && !$isSetTitulos) {
    $arrayComentIMG = ComentarioIMG::ReadAndRetArrayComentIMG("Comentario.txt");
    foreach ($arrayComentIMG as $coment) {
        if ($coment->GetUsuario()->GetEmail() == $email) {
            array_push($arrayRet, $coment);
        }//if
    }//foreach
}

if (!$isSetEmail && $isSetTitulos) {
    $arrayComentIMG = ComentarioIMG::ReadAndRetArrayComentIMG("Comentario.txt");
    
    foreach ($arrayComentIMG as $coment) {
        if ($coment->GetTituloComentario() == $titulo) {
            array_push($arrayRet, $coment);
        }//if
    }//foreach
}


//var_dump($arrayRet);
echo grilla::mostrarGrilla($arrayRet);


?>
