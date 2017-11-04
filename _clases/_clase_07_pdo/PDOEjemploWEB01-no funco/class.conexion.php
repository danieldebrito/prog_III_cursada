<?php
class Conexion{
    public function get_conexion(){
        $user = "root";
        $pass = "";
        $host = "localhost;";
        $db = "producto";
        $conexion = new PDO("mysql:host=$host, dbname=$db;",$user, $pass);
    //$conexion = new PDO('mysql:host=localhost;dbname=producto;charset=utf8', 'root', ''/*, array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)*/);
        return $conexion;
    }
}
?>