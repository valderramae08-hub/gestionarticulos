CREATE DATABASE aldrinn_gestionarticulos;

USE aldrinn_gestionarticulos;

CREATE TABLE articulos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100),

    marca VARCHAR(100),

    cantidad INT,

    bodega VARCHAR(100)

);
