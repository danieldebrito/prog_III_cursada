<?php
class ComentarioIMG{

    private $_tituloComentario;
    private $_comentario;
	private $_usuario;
	private $_pathImg;

    public function __construct($tituloComentario=NULL, $comentario=NULL, $usuario=NULL, $pathImg=NULL)
	{
		if($tituloComentario !== NULL && $comentario !== NULL && $usuario !== NULL && $pathImg !== NULL){
			$this->_tituloComentario = $tituloComentario;
			$this->_comentario = $comentario;
			$this->_usuario = $usuario;
			$this->_pathImg = $pathImg;
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
	
	public function GetPath(){
		return $this->_pathImg;
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

	public function SetPath($value){
		return $this->_pathImg = $value;
	}

    //-----------------------------------------------

    public function toString(){
        return $this->GetUsuario()->GetEMail().":".$this->GetTituloComentario().":".$this->GetComentario().":".$this->GetPath().":";
    }

    public static function ReadAndRetArrayComentIMG($path){
        $arrayRet = array();
        $arrayUsr = Gestionfiles::ReadAndRetArray("usuarios.txt"); 
    
        $file = fopen($path, "r");
    
        while(!feof($file)){
            $arrAux = explode(":", fgets($file));
            
            if(isset($arrAux[0]) && isset($arrAux[1]) && isset($arrAux[2]) && isset($arrAux[3])){
                $usr = Usuario::retUsuarioByMail($arrayUsr,$arrAux[0]);
                $com = new ComentarioIMG($arrAux[1],$arrAux[2],$usr,$arrAux[3]);
                array_push($arrayRet, $com);
                }
        }
        fclose($file);
        return $arrayRet;
    }


    public static function retComentByTitulo($array, $titulo){
		$flag = true;
		foreach($array as $coment){
				if($titulo == $coment->GetTituloComentario()){
					$flag = false;
					return $coment;
				}
			}
		if($flag){
			echo "EL cometario NO EXISTE";
			return false;
		}
	}
    



}
?>