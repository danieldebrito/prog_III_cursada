<?php
require_once "clases\persona.php";
include_once "clases\alumno.php";
include_once "clases\profesor.php";
include_once "clases\aula.php";

$alumnos01 = array();
$alumnos02 = array();
$aula01 = new Aula($profesor01);

$alumno01 = new Alumno("Daniel","de Brito",38,"M",$aula01);
$alumno02 = new Alumno("Ricardo","Samue",38,"M",$aula01);
$alumno03 = new Alumno("Damian","sefio",38,"M",$aula01);
$alumno04 = new Alumno("Pedro","jioopd",38,"M",$aula01);
$alumno05 = new Alumno("Federico","desoe",38,"M",$aula01);
$alumno06 = new Alumno("Fabricio","joesd",38,"M",$aula01);
$alumno07 = new Alumno("Ezequiel","fesad",38,"M",$aula01);
$alumno08 = new Alumno("Mauro","fere",38,"M",$aula01);
$alumno09 = new Alumno("Yoana","sero",38,"M",311);
$alumno10 = new Alumno("Carlos","awst",38,"M",311);
$alumno11 = new Alumno("Daniel","de Brito",38,"M",311);
$alumno12 = new Alumno("fdsfdsf","de hthth",38,"M",311);
$alumno13 = new Alumno("fdsfds","deghghBrito",38,"M",311);
$alumno14 = new Alumno("gfregr","hhhg",38,"M",311);
$alumno15 = new Alumno("ytry","ytryrry",38,"M",311);
$alumno16 = new Alumno("hgfhf","hbgbgb",38,"M",311);
$alumno16 = new Alumno("Danhghiel","bgbgfff",38,"M",311);
$alumno16 = new Alumno("hgg","hgththt",38,"M",311);
$alumno16 = new Alumno("hghrt","ghghg",38,"M",311);
$alumno16 = new Alumno("yhthth","uuttrr",38,"M",311);

$profesor01 = new Profesor("Octavio","Villegas",50,"M",311);
$profesor02 = new Profesor("Davila","Mauricio",50,"M",312);



$aula01->cargarObjetos($alumno01);
$aula01->cargarObjetos($alumno02);
$aula01->cargarObjetos($alumno03);
$aula01->cargarObjetos($alumno04);
$aula01->cargarObjetos($alumno05);
$aula01->cargarObjetos($alumno06);
$aula01->cargarObjetos($alumno07);
$aula01->cargarObjetos($alumno08);
$aula01->cargarObjetos($alumno09);
$aula01->cargarObjetos($alumno10);

if($aula01->buscarAlumnoByNombre("Daniel"))
    echo "el alumno esta en el aula";


?>