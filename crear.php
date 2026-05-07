<?php
include "db.php";

if($_POST){
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $bodega = $_POST['bodega'];

    $conn->query("INSERT INTO articulos (nombre, marca, cantidad, bodega)
    VALUES ('$nombre', '$marca', '$cantidad', '$bodega')");

    header("Location: index.php");
}
?>

<form method="POST">
    <input name="nombre" placeholder="Nombre"><br>
    <input name="marca" placeholder="Marca"><br>
    <input name="cantidad" placeholder="Cantidad"><br>
    <input name="bodega" placeholder="Bodega"><br>
    <button>Guardar</button>
</form>