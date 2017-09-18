<?php
include "funciones.php"; // pega codigo,
require "funciones2.php";
include "/entidades/calculadora.php";
require_once "funciones2.php"; // pega codigo, este codigo va estar incluido una unica vez 


Restar(100,73);
Sumar(100,100);

Calculadora::Multiplicar(5,5);

// se puede llamar al metodo como si fuera de instancia
$CalcOBJ = new Calculadora();
$CalcOBJ->Multiplicar(3,3);


if( Validar::EsCero(2))
    echo "<BR>"."es cero";
else
    echo "<BR>"."no es cero";
    if( Validar::EsCero(0))
    echo "<BR>"."es cero";
else
    echo "<BR>"."no es cero";


Calculadora::Dividir(5,0);




?>