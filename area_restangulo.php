<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function calcularAreaRect($base, $altura){
    return $base * $altura;
}

echo "El area es " . calcularAreaRect(100, 20). "<br>";
echo "El area es " . calcularAreaRect(50, 25);

?>