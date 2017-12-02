<?php

include_once ("AccesoDatos.php");

class Persona{
    private $id;
    private $nombre;
    private $apellido;
    private $edad;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function borrarPersona()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
            delete 
            from personas 				
            WHERE id=:id");	
            $consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
            $consulta->execute();
            return $consulta->rowCount();
    }
    
    public function modificarPersona()
    {

        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
            update personas 
            set name='$this->nombre',
            lastName='$this->apellido',
            age='$this->edad'
            WHERE id='$this->id'");
            return $consulta->execute();

    }

    public function insertarPersona()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into personas (name,lastName,age)values('$this->nombre','$this->apellido','$this->edad')");
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public static function recuperarPersonas()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,name as nombre, lastName as apellido,age as edad from personas");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "Persona");		
	}
}

?>