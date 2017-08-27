<h3>Aplicación Nº 4 (Calculadora)</h3>

<p>Escribir un programa que use la variable $operador que pueda almacenar los símbolos 
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. 
De acuerdo al símbolo que tenga la variable $operador, deberá realizarse la operación 
indicada y mostrarse el resultado por pantalla.</p>


<?php
$op1 = rand(0,15);
$op2 = rand(0,15);
$operadores = ["+", "-", "/", "*"];


function noCero($op2)
{
    if($op2 == 0)
        return false;
    return true;    
}


echo "valores:"."<br>"." operador uno: ".$op1."<br>"." operador dos: ".$op2."<br>"."<br>";

    foreach($operadores as $operador)
    {
        switch($operador){
        case "+";
            echo "operador suma: ";
            echo $op1 + $op2;
            echo "<br>"."<br>";
            break;
        case "-";
            echo "operador resta: ";
            echo $op1 - $op2;
            echo "<br>"."<br>";
            break; 
        case "/";
            echo "operador division: ";
            if(noCero($op2))
                echo $op1 / $op2;
            else
                echo "NO SE PUEDE DIVIDIR POR CERO";
            echo "<br>"."<br>";
            break; 
        case "*";
            echo "operador multiplicacion: ";
            echo $op1 * $op2;
            echo "<br>"."<br>";
            break;
        }
    }
?>