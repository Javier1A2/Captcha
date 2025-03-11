<?php
// Iniciar sesión
session_start();

// Incluir la conexión a la base de datos
include "conexion.php";

// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Buscar el usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        // El usuario existe, verificar la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Contraseña correcta, iniciar sesión
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_name"] = $row["nombre"];
            header("Location: inicio.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "El correo electrónico no está registrado.";
    }
}

// Cerrar la conexión
$conexion->close();
?>
