<?php

require '../models/home.php';

if (isset($_POST['precioTotal']) && isset($_POST['idCliente']) && isset($_POST['idUsuario'])) {

    $precioTotal = $_POST['precioTotal'];
    $idCliente = $_POST['idCliente'];
    $idUsuario = $_POST['idUsuario'];

    echo "<script>";
    echo "console.log('ID Cliente BACK:', '" . $idCliente . "');";
    echo "console.log('ID Usuario BACK:', '" . $idUsuario . "');";
    echo "</script>";

    $sql = "INSERT INTO ventas (VentPrecioTotal, IdClienteFK, IdUsuariosFK) VALUES ('$precioTotal', '$idCliente', '$idUsuario')";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado) {
        $response['success'] = true;
        $response['message'] = 'Datos de la venta guardados correctamente.';
    } else {
        $response['success'] = false;
        $response['message'] = 'Error al guardar los datos de la venta: ' . mysqli_error($conn);
    }
} else {
    $response['success'] = false;
    $response['message'] = 'No se recibieron los datos de la venta correctamente.';
}

$conn->close();
?>