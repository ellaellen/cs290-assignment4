<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');


$min_multiplicand = $_GET["min-multiplicand"];
$max_multiplicand = $_GET["max-multiplicand"];
$min_multiplier = $_GET["min-multiplier"];
$max_multiplier = $_GET["max-multiplier"];

if (!isset($min_multiplicand)){
    echo "missing parameter min-multiplicand.\n";
}
if (!isset($max_multiplicand)){
    echo "missing parameter max-multiplicand.\n";
}
if (!isset($min_multiplier)){
    echo "missing parameter min-multiplier.\n";
}
if (!isset($max_multiplier)){
    echo "missing parameter max-multiplier.\n";
}
 
if ($min_multiplicand > $max_multiplicand){
    echo "Minimum multiplicand larger than maximum.\n";
}
if ($min_multiplier > $max_multiplier){
    echo "Minimum multiplier larger than maximum.\n";
}

if ($min_multiplicand != (int)$min_multiplicand){
    echo "min-multiplicand must be an integer.\n";
}
if ($max_multiplicand != (int)$max_multiplicand){
    echo "max-multiplicand must be an integer.\n";
}   
if ($min_multiplier != (int)$min_multiplier){
    echo "min-multiplier must be an integer.\n";
}   
if ($max_multiplier != (int)$max_multiplier){
    echo "max-multiplier must be an integer.\n";
} 

?>

