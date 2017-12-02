<?php
require_once 'empleado.php';
require_once 'IApi.php';

class empleadoApi extends empleado
{
    public function CargarUno($request, $response, $args)
    {
        $ArrayDeParametros = $request->getParsedBody();

        $nombre=$ArrayDeParametros['nombre'];
    
        $miEmp = new empleado();
        $miEmp->nombre=$ArrayDeParametros['nombre'];
        $miEmp->apellido=$ArrayDeParametros['apellido'];
        $miEmp->email=$ArrayDeParametros['email'];
        $miEmp->legajo=$ArrayDeParametros['legajo'];
        $miEmp->clave=$ArrayDeParametros['clave'];
        $miEmp->perfil=$ArrayDeParametros['perfil'];

        $miEmp->InsertarEmpleadoParametros();

        $archivos = $request->getUploadedFiles();
        $destino="class/fotosEmpleados/";
        
        $nombreAnterior=$archivos['foto']->getClientFilename();
        $extension= explode(".", $nombreAnterior)  ;
        
        $extension=array_reverse($extension);

        $archivos['foto']->moveTo($destino.$nombre.".".$extension[0]);
        $response->getBody()->write("se guardo ok el empleado");

        return $response;
    }

    public function TraerTodos($request, $response, $args)
    {
        $todosLosCds=empleado::TraerTodoLosEmpleados();
        $newResponse = $response->withJson($todosLosCds, 200);
        return $newResponse;
    }

	public static function VerificarEmpleado($request, $response, $args) {
        $objDelaRespuesta= new stdclass();
		$ArrayDeParametros = $request->getParsedBody();
		$empleadoBuscado = empleado::TraerUnEmpleado($ArrayDeParametros['email']);
		
        if($empleadoBuscado <> null and $empleadoBuscado->clave == $ArrayDeParametros['clave']){
            $objDelaRespuesta->valido = true;
            $objDelaRespuesta->usuario = $empleadoBuscado;
		}
		else{
            $objDelaRespuesta->valido = false;
            $objDelaRespuesta->usuario = null;
        }
        $newResponse = $response->withJson($objDelaRespuesta, 200);  
        return $newResponse;
    }
}
