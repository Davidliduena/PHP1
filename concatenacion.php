<?php 
ini_set('disply_errors', 1);
ini_set('disply_startup_errors', 1);
error_reporting(E_ALL);

$aAuto = array();
$aAuto ["color"] = array("negro", "verde");
$aAuto["marca"] = "ford";
$aAuto["anio"] = 1908;
$aAuto["precio"] = 800;

echo "El auto " . $aAuto["marca"] ." del año " .$aAuto["anio"] ." es de color " . $aAuto["color"][0] . " su precio es de ". $aAuto["precio"];


?>