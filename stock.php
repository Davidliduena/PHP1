<?php 
ini_set('disply_errors', 1);
ini_set('disply_startup_errors', 1);
error_reporting(E_ALL);


$stock = 800;

if ($stock > 0) {
    echo "hay stock";
}else echo"no hay stock";


?>