<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definicion
function maximo($aVector) {
    $valorMaximo = 0;
    foreach ($aVector as $valor) {
        if ($valorMaximo < $valor) {
            $valorMaximo = $valor;
        }
    }
    return $valorMaximo;
}

//uso
$aNotas = array(8,4,5,3,9,1);
$aSueldo = array(800,4000,500,30,9000,10000);
echo "el promedio es: " . maximo($aNotas). "<br>";
echo "el promedio es: " . maximo($aSueldo). "<br>";

?>

