<?php
require_once "entidades/Calculadora.php";

if(validar::EsCero(0))
    echo "es cero"."<BR>";
else
    echo "dist de cero"."<BR>";

Calculadora::Sumar(5,6);
Calculadora::Restar(5,6);
Calculadora::Multiplicar(5,6);
Calculadora::Dividir(5,6);
Calculadora::Dividir(5,0);

?>