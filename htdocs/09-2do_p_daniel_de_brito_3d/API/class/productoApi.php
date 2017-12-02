<?php
require_once 'producto.php';
require_once 'IApi.php';

class productoApi extends producto implements IApi{
	
	public function CargarUno($request, $response, $args) {
		$ArrayDeParametros = $request->getParsedBody();

        $miProd = new producto();
		$miProd->nombre=$ArrayDeParametros['nombre'];
		$miProd->precio=$ArrayDeParametros['precio'];
		
        $miProd->InsertarProductoParametros();

        $response->getBody()->write("se guardo ok el producto");


        return $response;
	}

	public function TraerTodos($request, $response, $args) {
		$todosLosCds=producto::TraerTodoLosProductos();
	   $newResponse = $response->withJson($todosLosCds, 200);  
	  return $newResponse;
  }

  public function ModificarUno($request, $response, $args) {

	$ArrayDeParametros = $request->getParsedBody();
   	
   $mip = new producto();
   $mip->id=$ArrayDeParametros['id'];
   $mip->nombre=$ArrayDeParametros['nombre'];
   $mip->precio=$ArrayDeParametros['precio'];


	  $resultado =$mip->ModificarPParametros();
	  $objDelaRespuesta= new stdclass();

   $objDelaRespuesta->resultado=$resultado;
   $objDelaRespuesta->tarea="modificar";
   return $response->withJson($objDelaRespuesta, 200);		
}


public function BorrarUno($request, $response, $args) {
	$ArrayDeParametros = $request->getParsedBody();
	$id=$ArrayDeParametros['id'];
	$prod= new producto();
	$prod->id=$id;
	$cantidadDeBorrados=$prod->BorrarProd();

	$objDelaRespuesta= new stdclass();
   $objDelaRespuesta->cantidad=$cantidadDeBorrados;
   if($cantidadDeBorrados>0)
	   {
			$objDelaRespuesta->resultado="borro";
	   }
	   else
	   {
		   $objDelaRespuesta->resultado="no Borro";
	   }
   $newResponse = $response->withJson($objDelaRespuesta, 200);  
	 return $newResponse;
}

}
?>