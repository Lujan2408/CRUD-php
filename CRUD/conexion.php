<?php 

$conexion = new mysqli("localhost", "root", "", "racket_center"); 
if($conexion->connect_errno) {
    die("No se pudo conectar al servidor: " . $conexion->connect_error); 
}

?> 