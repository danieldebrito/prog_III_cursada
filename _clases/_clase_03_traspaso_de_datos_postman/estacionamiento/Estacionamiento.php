<?php

include_once "Vehiculo.php";

class Estacionamiento
{
    //$autosEstacionados = array();
    //var_dump($autosEstacionados);
     /* public function cargarEstacionados($auto){
        array_push($this->autosEstacionados , $auto); 
    }*/

    static public function Guardar($auto){
        
        $archivo = fopen("archivos/Estacionados.txt", "a");
        $ahora = date("Y-m-d H:i:s");
        fwrite($archivo, $auto->_patente." - ".$ahora."\n");
        fclose($archivo);
    }

  

    



    public function Sacar($auto){
        $archivo = fopen("archivos/Estacionados.txt", "r");

        while(!feof($archivo))
        {
            echo fgets($archivo)."</br>";
        }
        fclose($archivo);
    }

    public function Exist($auto){
        $archivo = fopen("archivos/Estacionados.txt", "r");
        
                while(!feof($archivo))
                {
                    echo fgets($archivo)."</br>";
                }
                fclose($archivo);
    }



}
?>