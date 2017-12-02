<?php
class cliente{
    
    private $_nombre;
    private $_mail;
    private $_clave;
    private $_sexo;

	public function __construct($nombre=NULL, $mail=NULL, $clave=NULL, $sexo=NULL)
	{
		if($nombre !== NULL && $mail !== NULL && $clave !== NULL && $sexo !== NULL){
			$this->_nombre = $nombre;
			$this->_mail = $mail;
            $this->_clave = $clave;
            $this->_sexo = $sexo;
		}
	}

	/////  getters and setters //////////////////////////////////////////////////////////

	public function GetNombre(){
		return $this->_nombre;
	}

	public function GetMail(){
		return $this->_mail;
	}

	public function GetClave(){
		return $this->_clave;
	}

	public function GetSexo(){
		return $this->_sexo;
	}

	//---------------------------------//

	public function SetNombre($value){
		return $this->_nombre = $value;
	}

	public function SetMail($value){
		return $this->_mail = $value;
	}

	public function SetClave($value){
		return $this->_clave = $value;
	}

	public function SetSexo($value){
		return $this->_sexo = $value;
	}

	//-------------------------------//
////// methods /////////////////////////////////////////////////////////

public function toString(){
return $this->GetNombre().":".$this->GetMail().":".$this->GetClave().":".$this->GetSexo();
}





}
?>