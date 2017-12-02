<?php
require_once "obj\cliente.php";

class AccesoFiles{
    
    public static function WhriteSingleLineTxt($obj, $path){
        $myfile = fopen($path, "a") or die("Unable to open file!");
        if($obj->getNombre != null)
        fwrite($myfile, $obj->toString()."\r\n");
        fclose($myfile);
    }

    public static function ReadAndRetArray(){
        $arrayRet = array();
        $gestor = fopen("clientes/clientesActuales.txt", "r");

        while(!feof($gestor)){
            $arrAux = explode(":", fgets($gestor));
            
            if(count($arrAux) > 1){
                $cliente = new cliente();
                $cliente->SetNombre($arrAux[0]);
                $cliente->SetMail($arrAux[1]);
                $cliente->SetClave($arrAux[2]);
                $cliente->SetSexo($arrAux[3]);
            }
        array_push($arrayRet, $cliente);
        }
        fclose($gestor);
        return $arrayRet;
    }

    public static function TraerUnaPersona($dni) 
	{
		$persona = new Persona();
		
		$a = fopen("./txt/personas.txt", "r");
		
		while(!feof($a)){
			$arr = explode("-", fgets($a));

			if(count($arr) > 1){
				if((int)$arr[2] == $dni){
					$persona->SetFoto($arr[3]);
					$persona->SetDni($arr[2]);
					$persona->SetNombre($arr[1]);
					$persona->SetApellido($arr[0]);
					break;
				}
			}
		}
		fclose($a);
		
		return $persona;				
    }
    
    public static function Borrar($dni)
	{	
		$arrPersonas = array();
		
		$a = fopen("./txt/personas.txt", "r");
		
		while(!feof($a)){
		
			$arr = explode("-", fgets($a));

			if(count($arr) > 1){
				if((int)$arr[2] == $dni){
					continue;
				}
				$persona = new Persona();
				$persona->SetFoto($arr[3]);
				$persona->SetDni($arr[2]);
				$persona->SetNombre($arr[1]);
				$persona->SetApellido($arr[0]);
				
				array_push($arrPersonas, $persona);
			}
		}
		fclose($a);
		
		$a = fopen("./txt/personas.txt", "w");
		fclose($a);
		
		foreach($arrPersonas AS $p){
			$p->Insertar();
		}
		
	}
	
	public static function Modificar($p)
	{
		$arrPersonas = array();
		
		$a = fopen("./txt/personas.txt", "r");
		
		while(!feof($a)){
		
			$arr = explode("-", fgets($a));

			if(count($arr) > 1){
				if((int)$arr[2] == $p->GetDni()){
					$persona = $p;
				}
				else{
					$persona = new Persona();
					$persona->SetFoto($arr[3]);
					$persona->SetDni($arr[2]);
					$persona->SetNombre($arr[1]);
					$persona->SetApellido($arr[0]);
				}
				array_push($arrPersonas, $persona);
			}
		}
		fclose($a);
		
		$a = fopen("./txt/personas.txt", "w");
		fclose($a);
		
		foreach($arrPersonas AS $p){
			$p->Insertar();
		}		
    }
    
    //--METODOS DE INSTANCIA
	public function Insertar()
	{
		$a = fopen("./txt/personas.txt", "a");
		
		fwrite($a, $this->ToString() . "\r\n");
		
		fclose($a);
	}	
}
?>