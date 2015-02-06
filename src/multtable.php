<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');

if ($_GET["min-multiplicand"] > $_GET["max-multiplicand"]){
    echo "Minimum multiplicand larger than maximum.";
}
if ($_GET["min-multiplier"] > $_GET["max-multiplier"]){
    echo "Minimum multiplier larger than maximum.";
}

?>

