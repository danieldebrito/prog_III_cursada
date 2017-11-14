<?php
class Gestionfiles{

    // guarda obj separado por :  y lee con fgets 
public static function SaveObj($obj, $path){
    
    $resultado = FALSE;
    
    $ar = fopen($path, "a") or die("Unable to open file!");
    $cant = fwrite($ar, $obj->ToString()."\r\n");
    
    if($cant > 0)
        $resultado = TRUE;			
    
    fclose($ar);
    
    return $resultado;
}
public static function ReadAndRetArray($path){
    $arrayRet = array();

    $file = fopen($path, "r");

    while(!feof($file)){
        $arrAux = explode(":", fgets($file));
        
        if(isset($arrAux[1])){
            $usr = new Usuario($arrAux[0],$arrAux[1],$arrAux[2],$arrAux[3],$arrAux[4]);
            array_push($arrayRet, $usr);
            }

    }
    fclose($file);
    return $arrayRet;
}




// otras no testeadas
public static function ReadAndCharge($path){
    $objs = array();

    $gestor = fopen($path, "r");
    while ($userinfo = fscanf($gestor, "%s : %s : %s : %s : %s\n")) {
    list ($nombre, $email, $perfil, $edad, $clave) = $userinfo;
    $obj = new Usuario ($nombre, $email, $perfil, $edad, $clave);
    array_push($objs, $obj);
    }
    fclose($gestor);
    return $objs;
}
public static function SaveObjJSON($obj, $path){
    $file=fopen($path, "a");	
    
    $renglon = $obj->devolverJson();
    fwrite($file, $renglon."\n"); 		 
    fclose($file);
}
private static function ReadAndRetArrayJSON( $path, $formato="array" ){
    $objsArray=  array();
    $file=fopen( $path, "r" );//escribe y mantiene la informacion existente

    while(!feof($file)){
        $renglon=fgets($file);
        $obj= json_decode( $renglon);
        // Verifico si $datos es un objeto
        if ( !$datos ) continue;

        $usr = new Usuario($obj->nombre,$obj->email, $obj->perfil, $obj->edad, $obj->clave );            
        
        $objsArray[]=$usr;
        //break;
    }
    fclose($file);

    if (strtolower($formato) == "json" )
        return json_encode( $objsArray );
    
    return $objsArray;
}


}
?>