<?php
include("../models/home.php");

$token = $_POST['token'];
$change = md5($_POST['changePass']);

$sql = "UPDATE usuarios SET UsuContrasena = '$change' WHERE token_reset_password = '$token'";

$resultado = $conn->query($sql);

if ($resultado) {
    header("Location: ../views/login.php?message=success_password");
} else {
    echo "Error al cambiar la contraseña: " . $conn->error;
}

?>