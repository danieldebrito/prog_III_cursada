<?php
class empleado{
	public $id;
 	public $nombre;
  	public $apellido;
    public $email;
    public $foto;
    public $legajo;
    public $clave;
    public $perfil;  
    
    /*id-nombre-apellido-email-foto-legajo-clave-perfil*/
    public function InsertarEmpleadoParametros()
    {
               $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
               $consulta =$objetoAccesoDato->RetornarConsulta("
               INSERT into empleados (nombre, apellido, email, legajo, clave, perfil)
               values(:nombre, :apellido, :email, :legajo, :clave, :perfil)");
               $consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
               $consulta->bindValue(':apellido', $this->apellido, PDO::PARAM_STR);
               $consulta->bindValue(':email', $this->email, PDO::PARAM_STR);
               //$consulta->bindValue(':foto', $this->foto, PDO::PARAM_STR);
               $consulta->bindValue(':legajo', $this->legajo, PDO::PARAM_STR );
               $consulta->bindValue(':clave', $this->clave, PDO::PARAM_STR);
               $consulta->bindValue(':perfil', $this->perfil, PDO::PARAM_STR);
               $consulta->execute();		
               return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public static function TraerTodoLosEmpleados(){
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
        SELECT * FROM `empleados` WHERE 1 ");
        $consulta->execute();			
        return $consulta->fetchAll(PDO::FETCH_CLASS, "empleado");
}

public static function TraerUnEmpleado($email) 
{
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
        select 
        id, 
        nombre, 
        apellido,
        email, 
        legajo, 
        clave, 
        perfil 
        from empleados where email = '$email'");
        $consulta->execute();
        $emp= $consulta->fetchObject('empleado');
        return $emp;				
        
}

}