<?php

require '../models/home.php';


if (isset($_GET['documentoCliente'])) {
    $documentoCliente = $_GET['documentoCliente'];

    $sql = "SELECT IdCliente FROM cliente WHERE ClieCedula = '$documentoCliente'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $idCliente = $fila['IdCliente'];

        // Envía solo el valor del ID del cliente
        $response = $idCliente;

    } else {
        $response['success'] = false;
        $response['message'] = 'No se encontró el ID del cliente.';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'No se recibió el número de documento del cliente.';
}

echo $response;


$conn->close();
?>