<?php
require_once "Fabrica.php";
require_once "Empleado.php";
class GestionArchivos{
 
    public static function ReadFileTxt(){
        $myfile = fopen("padronEmpleados.txt", "a") or die("Unable to open file!");
        
        echo fread($myfile,filesize("padronEmpleados.txt"));
        
        fclose($myfile);
    }

    public static function ReadSingleLinesTxt(){
        $myfile = fopen("padronEmpleados.txt", "a") or die("Unable to open file!");
        
        while(!feof($myfile)) {
            echo fgets($myfile)."</br>";
        }
            fclose($myfile);
    }

    public static function WhriteSingleLineTxt($emp){
        
        $myfile = fopen("padronEmpleados.txt", "a") or die("Unable to open file!");
        fwrite($myfile, $emp->getApellido()." ".$emp->getNombre()." ".$emp->getDni()." ".$emp->getSexo()." ".$emp->getLegajo()." ".$emp->getSueldo()."\n");
        fclose($myfile);
    }

    public static function ReadAndCharge(){
        $empleados = array();

        $gestor = fopen("padronEmpleados.txt", "r");
        while ($userinfo = fscanf($gestor, "%s\t%s\t%u\t%s\t%u\t%f\n")) {
        list ($apellido, $nombre, $dni, $sexo, $legajo, $sueldo) = $userinfo;
        $empleado = new Empleado ($apellido, $nombre, $dni, $sexo, $legajo, $sueldo);
        array_push($empleados, $empleado);
        }
        fclose($gestor);
        return $empleados;
    }



}
?> 