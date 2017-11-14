	
	// EN LA CLASE DEL OBJ
	
	public function devolverJson()
	{
		return json_encode($this);
	}



<?php

include_once"vehiculo.php";
class estacionamiento
{
	static private $pathEstacionados;
	static private $pathFacturados;

	private static function getPathFacturados()
	{
		return "./archivos/facturacion.txt";
	}
	private static function getPathEstacionados()
	{
		return "./archivos/estacionados.txt";
	}	
	//
	public static function Guardar($auto)
	{
		/*$auto->_patente=$auto->GetPatente();
		$auto->_patente=$auto->devolverJson();
		echo $auto->_patente;
		die();*/
		$ahora=date("Y-m-d H:i:s"); 
		$auto->_fechaIngreso=$ahora;
		$archivo=fopen(self::getPathEstacionados(), "a");//escribe y mantiene la informacion existente		
		
		$renglon = $auto->devolverJson();
		fwrite($archivo, $renglon."\n"); 		 
		fclose($archivo);
	}
	//
	public static function RetornarArrayEstacionados( $formato = "" )
	{
		$path = self::getPathEstacionados();
		return self::RetornarArrayAuto( $path, $formato);
	}
	//
	public static function RetornarArrayFacturados( $formato = "" )
	{
		$path = self::getPathFacturados();
		return self::RetornarArrayAuto( $path, $formato);
	}
	//
	private static function RetornarArrayAuto( $path, $formato="array" )
	{
		$ListaDeAutosLeida=  array();
		$archivo=fopen( $path, "r" );//escribe y mantiene la informacion existente

			
		while(!feof($archivo))
		{
			$renglon=fgets($archivo);
			//http://www.w3schools.com/php/func_filesystem_fgets.asp

			$datos= json_decode( $renglon);
			// Verifico si $datos es un objeto
			if ( !$datos ) continue;
						
			$auto = new vehiculo($datos->_patente, $datos->_fechaIngreso, $datos->_fechaSalida, $datos->_Importe);
			
			$ListaDeAutosLeida[]=$auto;
			//break;
		}

		fclose($archivo);

		if (  strtolower($formato) == "json" )
			return json_encode( $ListaDeAutosLeida );
		
		return $ListaDeAutosLeida;
		

	}
	public static function RetornarJSONEstacionados()
	{
		$lista =estacionamiento::RetornarArrayEstacionados();		
		return json_encode($lista);
	}
	//
	public static function CrearTablaEstacionadosObjetos()
	{
		$lista =estacionamiento::RetornarArrayEstacionados();
		$archivo=fopen("archivos/tablaestacionados.php","w");

		//var_dump($lista);
		//die();
		$TablaCompleta=" <table border=1><th> patente </th><th> Ingreso</th>";
		$renglon="";
		
		foreach ($lista as $auto) 
		{
			$renglon= $renglon."<tr> <td> ".$auto->_patente ." </td> <td> ". $auto->_fechaIngreso."</td> </tr>" ; 
		
  		}
		$TablaCompleta =$TablaCompleta.$renglon." </table>";

			fwrite($archivo, $TablaCompleta);

	}
	//
	public static function GuardarListado( $listado )
	{
		$archivo=fopen(self::getPathEstacionados(), "w"); 	
		
		foreach ($listado as $auto) 
		{
			$dato = $auto->devolverJson() . PHP_EOL;

			fwrite( $archivo, $dato );

		}

		fclose($archivo);

	}

	public static function Sacar($unAuto)
	{

		$listado=estacionamiento::RetornarArrayEstacionados();
		$ListadoAdentro=array();
		$estaElVehiculo=false;
		foreach ($listado as $auto) 
		{
			if($auto->_patente == $unAuto->_patente)
			{
				$estaElVehiculo = true;

				$inicio = $auto->_fechaIngreso;	

				$ahora=date("d-m-y h:i:s a"); 

 				$diferencia = strtotime($ahora)- strtotime($inicio);
				
 				//http://www.w3schools.com/php/func_date_strtotime.asp
 				$importe=$diferencia*15;

				$mensaje= "tiempo transcurrido: $diferencia segundos <br> costo $importe ";
				
				$archivo=fopen(self::getPathFacturados(), "a");

				$dato = new vehiculo( $auto->_patente, $auto->_fechaIngreso, $ahora, $importe );
				
		 		fwrite($archivo, $dato->devolverJson() . PHP_EOL);
		 		fclose($archivo);


			}
			else
			{
				$ListadoAdentro[] = new vehiculo( $auto->_patente, $auto->_fechaIngreso, $auto->_fechaSalida, $auto->_Importe);				
			}
		}// fin del foreach

		if(!$estaElVehiculo)
		{
			$mensaje= "no esta esa patente!!!";
		}


		estacionamiento::GuardarListado($ListadoAdentro);


		echo $mensaje;
	}

	//
	public static function CrearJSAutocompletar()
	{
			
			 $archivoJS="$(function(){
			  var patentes = [ ". self::arrayAutocompletar() ." ];
			  
			  // setup autocomplete function pulling from patentes[] array
			  $('#autocomplete').autocomplete({
			    lookup: patentes,
			    onSelect: function (suggestion) {
					console.log(suggestion);
			      var thehtml = '<strong>patente: </strong> ' + suggestion.value + ' <br> <strong>ingreso: </strong> ' + suggestion.value;
			      $('#outputcontent').html(thehtml);
			         $('#botonIngreso').css('display','none');
      						console.log('aca llego');
			    }
			  });
			  

			});";
			
			$archivo=fopen("js/funcionAutoCompletar.js", "w");
			fwrite($archivo, $archivoJS);
			fclose( $archivo );
	}
	//
	public static function CrearTablaFacturado()
	{
		$lista = self::RetornarArrayFacturados();
		$cadena=" <table border=1><th> patente </th><th> Importe </th>";

		$archivo=fopen("archivos/tablaFacturacion.php", "w");

		if ( count($lista) > 0)
		{			

			foreach ($lista as $auto) {
				# code...				
				$cadena .= "<tr> <td> ".$auto->_patente."</td> <td>  ".$auto->_Importe ."</td> </tr>" ;
				
			}			
		}
		else
		{
			$cadena .= "<tr> <td> Sin </td> <td> Datos</td> </tr>" ;
		}

		$cadena .= " </table>";

		fwrite($archivo, $cadena);

		fclose( $archivo );

	}
	public static function arrayAutocompletar()
	{
		$string = "";
		$lista = self::RetornarArrayEstacionados("");

		foreach ( $lista as $auto)
		{
			$string .= " {value: \"".$auto->_patente."\" , data: \" ".$auto->_fechaIngreso." \" }, \n";
		}

		return $string;
	}
}


?>