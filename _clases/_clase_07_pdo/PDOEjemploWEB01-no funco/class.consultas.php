<?php
include_once "class.conexion.php";
class Consultas{

    public function InsertarProductos($arg_nombre,$arg_descripcion,$arg_categoria, $arg_precio){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO `producto` (`nombre`, `descripcion`, `categoria`, `precio`) VALUES (:nombre, :descripcion, :categoria, :precio)";
        //$sql = "INSERT INTO "."`producto`"."(`nombre`, `descripcion`, `categoria`, `precio`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])"
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':nombre', $arg_nombre);
        $statement->bindParam(':descripcion', $arg_descripcion);
        $statement->bindParam(':categoria', $arg_categoria);
        $statement->bindParam(':precio', $arg_precio);
        if(!$statement){
            return "Error al crear el registro";
        }else{
            $statement->execute();
            return "Registro creado correctamente";
        }
    }
    
    public function cargarProductos(){
        $arrayProd = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from productos";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while($result = $statement->fetch()){
            $arrayProd[]=$result;
        }

        return $arrayProd;
    }
}
?>