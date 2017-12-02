<?php
require_once "/../validador/Validad.php";
class Calculadora
{
    public static function Multiplicar($numeroUno, $numeroDos)
    {
        echo "<BR>".$numeroUno * $numeroDos;
    }

    public static function Dividir($numeroUno, $numeroDos)
    {
        if(Validar::EsCero($numeroDos))
            echo "<BR>"."No se puede dividir por cero";
        else
            echo "<BR>".$numeroUno / $numeroDos;
    }
}
?>