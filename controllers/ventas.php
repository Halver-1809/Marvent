<?php
include('../models/home.php');
$cedulaV=$_POST['ClieCedula'];
$telefonoC=$_POST['ClieNombre'];
$direccionC=$_POST['ClieTelPersonal'];
$emailC=$_POST['ClieDireccion'];
$emailC=$_POST['ClieEmailPersonal'];


$consulta="INSERT INTO ventas VALUES (null, '$nombreC', '$telefonoC', '$direccionC', '$emailC')";
$resultado=mysqli_query($conn,$consulta);
if($resultado == 1){
    echo "<script>location.href = '../views/sales.php';</script>"; 

}else{
    echo "<script>alert('Usuario no registrado')</script>";
}

?>