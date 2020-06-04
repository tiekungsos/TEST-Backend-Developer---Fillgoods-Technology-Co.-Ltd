<?php 


$coke = 0;
$buyCoke = 10;

$coke =abs($buyCoke) + processCoke(abs($buyCoke));
echo $coke;

function processCoke($buyCoke){
    return floor($buyCoke/3);
}