<?php
require_once "validador/validarDistintoCero.php";
class Calculadora
{
    function Sumar($numeroUno,$numeroDos)
    {
        echo "La Suma Es: ".($numeroUno + $numeroDos)."<BR>";
    }

    function Restar($numeroUno,$numeroDos)
    {
        echo "La Resta Es: ".($numeroUno - $numeroDos)."<BR>";
    }

    function Multiplicar($numeroUno,$numeroDos)
    {
        echo "La Multiplicacion Es: ".($numeroUno * $numeroDos)."<BR>";
    }

    function Dividir($numeroUno,$numeroDos)
    {
        if(validar::EsCero($numeroDos))
            echo "No se puede dividir por cero";
        else
            echo "La Division Es: ".($numeroUno / $numeroDos)."<BR>";
    }
}
?>