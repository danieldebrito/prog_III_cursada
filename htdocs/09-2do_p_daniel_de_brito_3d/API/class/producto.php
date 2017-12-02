<?php
class producto{
	public $id;
 	public $nombre;
  	public $precio;
    
    public function InsertarProductoParametros()
    {
               $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
               $consulta =$objetoAccesoDato->RetornarConsulta("
               INSERT into productos (nombre, precio)
               values(:nombre, :precio)");
               $consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
               $consulta->bindValue(':precio', $this->precio, PDO::PARAM_STR);
               $consulta->execute();		
               return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public static function TraerTodoLosProductos(){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
        SELECT * FROM `productos` WHERE 1 ");
        $consulta->execute();			
        return $consulta->fetchAll(PDO::FETCH_CLASS, "producto");
}

public function ModificarPParametros()
{
       $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
       $consulta =$objetoAccesoDato->RetornarConsulta("
           update productos 
           set nombre=:nombre,
           precio=:precio
           WHERE id=:id");
       $consulta->bindValue(':id',$this->id, PDO::PARAM_STR);
       $consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
       $consulta->bindValue(':precio', $this->precio, PDO::PARAM_STR);
       return $consulta->execute();
}


public function BorrarProd()
{
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
           delete 
           from productos 				
           WHERE id=:id");
           var_dump($this->id);	
           $consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
           $consulta->execute();
           return $consulta->rowCount();
}

}