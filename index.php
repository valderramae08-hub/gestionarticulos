<?php
$conn = new mysqli("mysql-aldrinn.alwaysdata.net", "aldrinn", "clase1234", "aldrinn_gestionarticulos");

if ($conn->connect_error) {
    die("Error de conexión");
}

if (isset($_POST['guardar'])) {

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $bodega = $_POST['bodega'];

    $sql = "INSERT INTO articulos(nombre, marca, cantidad, bodega)
            VALUES('$nombre','$marca','$cantidad','$bodega')";

    $conn->query($sql);
}

if (isset($_GET['eliminar'])) {

    $id = $_GET['eliminar'];

    $conn->query("DELETE FROM articulos WHERE id=$id");
}

$resultado = $conn->query("SELECT * FROM articulos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión Artículos</title>

    <style>

        body{
            font-family: Arial;
            margin:40px;
            background:#f4f4f4;
        }

        h1{
            color:#333;
        }

        form{
            background:white;
            padding:20px;
            width:300px;
            border-radius:10px;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:10px;
        }

        button{
            margin-top:10px;
            padding:10px;
            width:100%;
            background:#007bff;
            color:white;
            border:none;
        }

        table{
            margin-top:30px;
            width:100%;
            background:white;
            border-collapse:collapse;
        }

        th, td{
            padding:12px;
            border:1px solid #ccc;
            text-align:center;
        }

        a{
            color:red;
            text-decoration:none;
        }

    </style>

</head>

<body>

<h1>Gestión de Artículos</h1>

<form method="POST">

    <input type="text" name="nombre" placeholder="Nombre" required>

    <input type="text" name="marca" placeholder="Marca" required>

    <input type="number" name="cantidad" placeholder="Cantidad" required>

    <input type="text" name="bodega" placeholder="Bodega" required>

    <button type="submit" name="guardar">Guardar</button>

</form>

<table>

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Marca</th>
    <th>Cantidad</th>
    <th>Bodega</th>
    <th>Acción</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>

<tr>

    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['marca']; ?></td>
    <td><?php echo $fila['cantidad']; ?></td>
    <td><?php echo $fila['bodega']; ?></td>

    <td>
        <a href="?eliminar=<?php echo $fila['id']; ?>">
            Eliminar
        </a>
    </td>

</tr>

<?php } ?>

</table>

</body>
</html>
