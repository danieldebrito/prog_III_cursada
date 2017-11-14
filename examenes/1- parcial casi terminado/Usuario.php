<?php
class Usuario{
    
    private $_nombre;
    private $_email;
    private $_perfil;
    private $_edad;
	private $_clave;

	public function __construct($nombre=NULL, $email=NULL, $perfil=NULL, $edad=NULL, $clave=NULL)
	{
		if($nombre !== NULL && $email !== NULL && $perfil !== NULL && $edad !== NULL && $clave !== NULL){
			$this->_nombre = $nombre;
			$this->_email = $email;
            $this->_perfil = $perfil;
			$this->_edad = $edad;
			$this->_clave = $clave;
		}
	}

	/////  getters and setters //////////////////////////////////////////////////////////

	public function GetNombre(){
		return $this->_nombre;
	}

	public function GetEMail(){
		return $this->_email;
	}

	public function GetPerfil(){
		return $this->_perfil;
	}

	public function GetEdad(){
		return $this->_edad;
	}

	public function GetClave(){
		return $this->_clave;
	}

	//---------------------------------//

	public function SetNombre($value){
		return $this->_nombre = $value;
	}

	public function SetEMail($value){
		return $this->_email = $value;
	}

	public function SetPerfil($value){
		return $this->_perfil = $value;
	}

	public function SetEdad($value){
		return $this->_edad = $value;
	}

	public function SetClave($value){
		return $this->_clave = $value;
	}

	//-------------------------------//
////// methods /////////////////////////////////////////////////////////

	public function toString(){
	return $this->GetNombre().":".$this->GetEMail().":".$this->GetPerfil().":".$this->GetEdad().":".$this->GetClave().":";
	}

	public function devolverJson()
	{
		return json_encode($this);
	}

	public static function retUsuario($arrayUsr, $email, $clave){
		$flag = true;
	foreach($arrayUsr as $usr){
		
			if($email == $usr->GetEmail() && $clave == (int)$usr->GetClave()){
				echo "BIEMVENIDO";
				$flag = false;
				return $usr;
				break;
			}
		
			if($email == $usr->GetEmail() && $clave != (int)$usr->GetClave()){
				echo "CLAVE INVALIDA";
				$flag = false;
				return $usr;
				break;
			}
		
			if($email != $usr->GetEmail() && $clave == (int)$usr->GetClave()){
				echo "EMAIL INVALIDO";
				$flag = false;
				return $usr;
				break;
			}
		}
		
		if($flag){
			echo "EL USUARIO NO EXISTE";
			return NULL;
		}
	}


	public static function retUsuarioByMail($arrayUsr, $email){
		$flag = true;
		foreach($arrayUsr as $usr){
				if($email == $usr->GetEmail()){
					$flag = false;
					return $usr;
					break;
				}
			}
		if($flag){
			echo "EL USUARIO NO EXISTE";
			return NULL;
		}
	}
}
?>