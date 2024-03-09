<?php
include('../models/home.php');
$nombre=$_POST['NombreProducto'];
$precio=$_POST['PrecioProducto'];
$marca=$_POST['MarcaProducto'];
$fechaExpedicion=$_POST['FechaProducto'];
$cantidad=$_POST['CantidadProducto'];


$consulta="INSERT INTO producto VALUES (null, '$nombre', '$precio', '$marca', '$fechaExpedicion','$cantidad', '1')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado == 1){
    echo "<script>location.href = '../views/inventory.php';</script>"; 

}else{
    echo "<script>alert('Usuario no registrado')</script>";
}
