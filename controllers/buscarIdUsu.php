<?php
require '../models/home.php';

if (isset($_GET['correoSesion'])) {
    $correoSesion = $_GET['correoSesion'];

    $sql = "SELECT IdUsuarios FROM usuarios WHERE UsuEmailPersonal = '$correoSesion'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $idUsuario = $fila['IdUsuarios'];
        $response = $idUsuario;
    } else {
        $response['success'] = false;
        $response['message'] = 'Usuario no encontrado.';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Correo electrónico no proporcionado.';
}
echo $response;
$conn->close();
?>