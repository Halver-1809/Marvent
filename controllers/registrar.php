<?php
include('../models/home.php');
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$contrasena=md5($_POST['contrasena']);
$rol=$_POST['rol'];


$consulta="INSERT INTO usuarios VALUES (null, '$nombre', '$telefono', '$email', '$direccion','$contrasena', '$rol ')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado == 1){
    echo "<script>location.href = '../views/login.php';</script>"; 

}else{
    echo "<script>alert('Usuario no registrado')</script>";
}




//$_SESSION['usuario']=$usuario;