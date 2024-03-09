<?php
include('../models/home.php');
$Email=$_POST['Email_Proveedor'];
$Nombre=$_POST['Nombre_Proveedor'];
$Tell=$_POST['Telefono_Personal'];
$Direccion=$_POST['Direccion_proveedor'];



$consulta="INSERT INTO proveedor VALUES (null, '$Email', '$Nombre', '$Tell', '$Direccion')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado == 1){
    echo "<script>location.href = '../views/providers.php';</script>"; 

}else{
    echo "<script>alert('Usuario no registrado')</script>";
}

?>