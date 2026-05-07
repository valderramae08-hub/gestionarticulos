<?php include "db.php"; ?>

<h1>Gestión de Artículos</h1>

<a href="crear.php">Nuevo artículo</a>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Marca</th>
    <th>Cantidad</th>
    <th>Bodega</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM articulos");

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['nombre']}</td>
        <td>{$row['marca']}</td>
        <td>{$row['cantidad']}</td>
        <td>{$row['bodega']}</td>
    </tr>";
}
?>

</table>