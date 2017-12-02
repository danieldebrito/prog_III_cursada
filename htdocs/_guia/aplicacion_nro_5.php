
    <h3>Aplicación Nº 5 (Números en letras)</h3>
    <p>Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números entre el 20 y el 60.
    Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.</p>

<?php


$unidades = ["cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"];
$onceAdiecinueve = [11=> "once","doce","trece","catorce","quince","dieciseis","diecisiete","dieciocho","diesinueve"];
$decenas = [20 =>"veinte",30 =>"treinta",40 =>"cuarenta",50 =>"cincuenta",60 =>"sesenta",70 =>"setenta",80 =>"ochenta",90 =>"noventa"];
$entreDecenas = [2 =>"veinti",3 =>"treinti",4 =>"cuarenti",5 =>"cincuenti",6 =>"sesenti",7 =>"setenti",8 =>"ochenti",9 =>"noventi"];

for($i = 0;$i<100;$i++)
{
    $dato = rand(0,99);
    
    if($dato >= 0 && $dato < 11)
        echo "el nro es ".$dato." y en letras : ".$unidades[$dato];
    if($dato >= 11 && $dato < 20)
        echo "el nro es ".$dato." y en letras : ".$onceAdiecinueve[$dato];
    if($dato%10 == 0 && $dato >= 20 && $dato < 100)
        echo "el nro es ".$dato." y en letras : ".$decenas[$dato];
    if($dato%10 != 0 && $dato>=21 && $dato<100)
        echo "el nro es ".$dato." y en letras : ".$entreDecenas[($dato/10)].$unidades[$dato - (floor($dato/10)*10)];

echo "<br>";    
}
?>