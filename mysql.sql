CREATE DATABASE mi_base_de_datos;

USE mi_base_de_datos;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (nombre, email, password)
VALUES ('Juan Pérez', 'juan.perez@correo.com', 'contraseña_segura');

SELECT * FROM usuarios;
