    <?php
    // Iniciar sesión
    session_start();

    // Eliminar todas las variables de sesión
    session_unset();

    // Destruir la sesión
    session_destroy();

    // Redirigir al login
    header("Location: front_login.html");
    exit();
    ?>