<?php 
ini_set('disply_errors', 1);
ini_set('disply_startup_errors', 1);
error_reporting(E_ALL);


$valor = rand(1, 5);

if($valor == 1 || $valor == 3 || $valor == 5) {
    echo "El nuero $valor es impar";
}else{
    echo "El numero $valor es par";
}

?>