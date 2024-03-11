<?php

$id = $_POST['Id'];

require '../models/home.php';

$PrecioTotal = $_POST['PrecioTotal'];
$CantidadTotal = $_POST['CantidadTotal'];
$ClieNombre = $_POST['ClieNombre'];
$UsuNombre = $_POST['UsuNombre'];

$actualizarCliente = "UPDATE cliente SET ClieNombre = '$ClieNombre' WHERE IdCliente = (SELECT IdClienteFK FROM ventas WHERE IdVentas = $id)";
$conn->query($actualizarCliente);

$actualizarUsuario = "UPDATE usuarios SET UsuNombre = '$UsuNombre' WHERE IdUsuarios = (SELECT IdUsuariosFK FROM ventas WHERE IdVentas = $id)";
$conn->query($actualizarUsuario);

$editarVenta = "UPDATE ventas 
                SET VentPrecioTotal = '$PrecioTotal',
                    VentCantidadTotal = '$CantidadTotal',
                    IdClienteFK = (SELECT IdCliente FROM cliente WHERE ClieNombre = '$ClieNombre' LIMIT 1),
                    IdUsuariosFK = (SELECT IdUsuarios FROM usuarios WHERE UsuNombre = '$UsuNombre' LIMIT 1)
                WHERE IdVentas = $id";

$resultado = $conn->query($editarVenta);

if ($resultado) {
    echo "<script language='JavaScript'>
            alert('Los datos se editaron correctamente en la BD');
            window.location.assign('../views/sales.php');
          </script>";
} else {
    echo "<script language='JavaScript'>
            alert('Los datos no se editaron correctamente en la BD');
            window.location.assign('../views/sales.php');
          </script>";
}
?>