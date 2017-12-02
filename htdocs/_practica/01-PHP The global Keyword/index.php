<?php

$x = 5;
$y = 6;


function myTest(){
global $x, $y;

echo $x + $y;
}

myTest();



?>