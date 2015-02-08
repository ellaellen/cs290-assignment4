<!DOCTYPE html>
<html>
<head>
<title>CS290 Assignment 4</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-Type: text/plain');

$min_multiplicand = $_GET["min-multiplicand"];
$max_multiplicand = $_GET["max-multiplicand"];
$min_multiplier = $_GET["min-multiplier"];
$max_multiplier = $_GET["max-multiplier"];
$error = 0;

if (!isset($min_multiplicand)){
    echo "missing parameter min-multiplicand.\n";
    $error++;
}
if (!isset($max_multiplicand)){
    echo "missing parameter max-multiplicand.\n";
    $error++;
}
if (!isset($min_multiplier)){
    echo "missing parameter min-multiplier.\n";
    $error++;
}
if (!isset($max_multiplier)){
    echo "missing parameter max-multiplier.\n";
    $error++;
}

if ($min_multiplicand > $max_multiplicand){
    echo "Minimum multiplicand larger than maximum.\n";
    $error++;
}
if ($min_multiplier > $max_multiplier){
    echo "Minimum multiplier larger than maximum.\n";
    $error++;
}

if ($min_multiplicand != (int)$min_multiplicand){
    echo "min-multiplicand must be an integer.\n";
    $error++;
}
if ($max_multiplicand != (int)$max_multiplicand){
    echo "max-multiplicand must be an integer.\n";
    $error++;
}   
if ($min_multiplier != (int)$min_multiplier){
    echo "min-multiplier must be an integer.\n";
    $error++;
}   
if ($max_multiplier != (int)$max_multiplier){
    echo "max-multiplier must be an integer.\n";
    $error++;
} 

if ($error == 0) {
    $row = $max_multiplicand - $min_multiplicand + 1;
    $col = $max_multiplier - $min_multiplier + 1;

    $multiplier[$col] = array();
    $multiplicand[$row] = array();
    $i = 0;
    $j = 0;
    $cell = 0;

    echo "<table>";
    echo "<thead><tr><th></th>";
    for ($i = $min_multiplier; $i <= $max_multiplier; $i++){
        $multiplier[$i] = $i;
        echo "<th>$multiplier[$i]</th>";
    }
    echo "</tr></thead>";

    echo "<tbody>";
    for ($j = $min_multiplicand; $j <= $max_multiplicand; $j++){
        $multiplicand[$j] = $j;
        echo "<tr><th>$multiplicand[$j]</th>";
        for ($i = $min_multiplier; $i <= $max_multiplier; $i++){
            $cell = $multiplicand[$j]*$multiplier[$i];
            echo "<td>$cell</td>";
        }
        echo "</tr>";

    }
    echo "</tbody>";
}
?>
</body>
</html>







