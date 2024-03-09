<?php
require '../models/home.php';

// Recibir los datos de la venta
$precioTotal = $_POST['precioTotal'];
$cantidadTotal = $_POST['cantidadTotal'];
$idClienteFK = $_POST['idClienteFK'];
$idUsuariosFK = $_POST['idUsuariosFK'];

// Insertar la venta en la tabla ventas
$sql = "INSERT INTO ventas (VentPrecioTotal, VentCantidadTotal, IdClienteFK, IdUsuariosFK) VALUES ('$precioTotal', '$cantidadTotal', '$idClienteFK', '$idUsuariosFK')";
$resultado = mysqli_query($conn, $query);

if ($conn->query($sql) === TRUE) {
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false, 'error' => $conn->error));
}

// Cerrar la conexión a la base de datos
$conn->close();
?>