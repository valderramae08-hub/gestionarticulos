<?php
$host = "mysql-aldrinn.alwaysdata.net";
$user = "TU_USUARIO";
$pass = "TU_PASSWORD";
$db   = "TU_BASE_DE_DATOS";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>