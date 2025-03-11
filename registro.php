<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encriptar contraseña
    
    echo "Datos recibidos: $nombre, $email"; // Agrega esta línea para comprobar que los datos llegan correctamente
    
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
    
    if ($conexion->query($sql) === TRUE) {
        header("Location: front_login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
    
$conexion->close();
?>