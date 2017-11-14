<?php
class Comentario{

    private $_tituloComentario;
    private $_comentario;
	private $_usuario;

    public function __construct($tituloComentario=NULL, $comentario=NULL, $usuario=NULL)
	{
		if($tituloComentario !== NULL && $comentario !== NULL && $usuario !== NULL){
			$this->_tituloComentario = $tituloComentario;
			$this->_comentario = $comentario;
			$this->_usuario = $usuario;
		}
    }
    
    //------------------------------------------

    public function GetTituloComentario(){
		return $this->_tituloComentario;
	}

	public function GetComentario(){
		return $this->_comentario;
	}

	public function GetUsuario(){
		return $this->_usuario;
	}
    
    //--------------------------------------------

    public function SetTituloComentario($value){
		return $this->_tituloComentario = $value;
	}

	public function SetComentario($value){
		return $this->_comentario = $value;
	}

	public function SetUsuario($value){
		return $this->_usuario = $value;
	}
    //-----------------------------------------------

    public function toString(){
        return $this->GetUsuario()->GetEMail().":".$this->GetTituloComentario().":".$this->GetComentario()."\r\n";
        }



}
?>