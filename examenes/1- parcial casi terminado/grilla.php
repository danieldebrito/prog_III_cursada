<?php
include_once "aaaddb-Archivos.php";
include_once "Usuario.php";


class grilla{

public static function mostrarGrilla($arrayComent){
        $tabla = "";
        $grilla = '<table class="table">'.
                    '<thead style="background:rgb(14, 26, 112);color:#fff;">'.
                        '<tr>
                            <th> imagen </th>
                            <th> titulo </th>
                            <th> edad </th>
                            <th> nombre </th>
                        </tr>
                    </thead>'
        .'<tbody>';        
foreach($arrayComent as $coment){
        $tabla .= '<tr>
            <td> <IMG SRC="'.$coment->GetPath().'" width="100" height="100" > </th>'.
            '<td>'.$coment->GetTituloComentario().'</th>
            <td>'.$coment->GetUsuario()->GetEdad().'</th>
            <td>'.$coment->GetUsuario()->GetNombre().'</th>
        </tr>';       
}
    return $grilla.$tabla.'</tbody>';
}



/*
// require_once ("clases/producto.php");
// require_once ("clases/archivo.php");

// $queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

// switch($queHago){

    // case "mostrarGrilla":

        // $ArrayDeProductos = Producto::TraerTodosLosProductos();


        // foreach ($ArrayDeProductos as $prod){

            // $grilla .= "<tr>
                            // <td>".$prod->GetCodBarra()."</td>
                            // <td>".$prod->GetNombre()."</td>
                            // <td><img src='archivos/".$prod->GetPathFoto()."' width='100px' height='100px'/></td>
                        // </tr>
                        // <tr>
                            // <td><button>Eliminar</button></td>
                            // <td><button>Modificar</button></td>
                        // </tr>";
AGREGAR UNA COLUMNA CON DOS 'BUTTONS' (ELIMINAR Y MODIFICAR)
        // }

        // $grilla .= '</table>';

        // echo $grilla;

        // break;

    // case "agregar":
        // $res = Archivo::Subir();

        // if(!$res["Exito"]){
            // echo $res["Mensaje"];
            // break;
        // }

        // $codBarra = isset($_POST['codBarra']) ? $_POST['codBarra'] : NULL;
        // $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
        // $archivo = $res["PathTemporal"];

        // $p = new Producto($codBarra, $nombre, $archivo);

        // if($queHago === "agregar"){
            // if(!Producto::Guardar($p)){
                // echo "Error al generar archivo";
                // break;
            // }
        // }
        // header("Location:./index.php");

        // break;

    // case "modificar":

        // $res = Archivo::Subir();

        // if(!$res["Exito"]){
            // echo $res["Mensaje"];
            // break;
        // }

        // $codBarra = isset($_POST['codBarra']) ? $_POST['codBarra'] : NULL;
        // $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
        // $archivo = $res["PathTemporal"];

        // $p = new Producto($codBarra, $nombre, $archivo);

        // if($queHago === "agregar"){
            // if(!Producto::Guardar($p)){
                // echo "Error al generar archivo";
                // break;
            // }
        // }

        // if($queHago === "modificar"){
            // if(!Producto::Modificar($p)){
                // echo "Lamentablemente ocurrio un error y no se pudo escribir en el archivo.";
                // break;
            // }
        // }

        // header("Location:./index.php");

        // break;

    // case "eliminar":
        // $codBarra = isset($_POST['codBarra']) ? $_POST['codBarra'] : NULL;

        // if(!Producto::Eliminar($codBarra)){
            // $mensaje = "Lamentablemente ocurrio un error y no se pudo escribir en el archivo.";
        // }
        // else{
            // $mensaje = "El archivo fue escrito correctamente. PRODUCTO eliminado CORRECTAMENTE!!!";
        // }

        // echo $mensaje;

        // break;

    // default:
        // echo ":(";
// }*/
}
?>
