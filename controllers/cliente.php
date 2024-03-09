<?php
include('../models/home.php');
$cedulaC=$_POST['Cedula_Cliente'];
$nombreC=$_POST['Nombre_Cliente'];
$telefonoC=$_POST['Telefono_Cliente'];
$direccionC=$_POST['Direccion_Cliente'];
$emailC=$_POST['Email_Cliente'];


$consulta="INSERT INTO cliente VALUES (null, '$cedulaC', '$nombreC', '$telefonoC', '$direccionC', '$emailC')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado == 1){
    echo "<script>location.href = '../views/client.php';</script>"; 

}else{
    echo "<script>alert('Usuario no registrado')</script>";
}

?>