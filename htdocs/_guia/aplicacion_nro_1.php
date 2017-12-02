<?php
$acum = 0;
$cont = 1;

while($acum<1000)
{
    $acum += $cont;
    $cont++;

    if($acum > 1000)
    {
        $acum - $cont;
        break;
    }    
}
echo "se sumaron ".$cont." numeros.";

?>