<!-- posee dos atributos privados, implementa la interfaz iVendible, con el metodo, precio mas iva
y tiene un metodo que se llama retornar array de productos que retorna un array con 5 productos-->

<?php
/*require_once "IVendible.php";*/

class producto /*implements iVendible*/{
    private $_descripcion;
    private $_precioNeto;

    public function __construct($desc, $pn){
        $this->_descripcion = $desc;
        $this->_precioNeto = $pn;
    }

    public function RetArrayProductos(){
        $prod01 = new producto("yerba", 45.32);
        $prod02 = new producto("azucar", 32.72);
        $prod03 = new producto("harina", 25.82);
        $prod04 = new producto("agua", 12.25);
        $prod05 = new producto("arroz", 23.14);

        return $productos = array($prod01,$prod02,$prod03,$prod04,$prod05);
    }




    public function agregarProducto($productos, $producto){
        array_push($productos, $producto);
    }

    

}
?>
