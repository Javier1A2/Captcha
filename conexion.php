<?php
$host = "localhost";
$usuario = "root"; // Por defecto en Laragon
$clave = ""; // Por defecto en Laragon no tiene contraseña
$bd = "mi_base_de_datos";

$conexion = new mysqli($host, $usuario, $clave, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>