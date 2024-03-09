<?php
$id4=$_POST['Id'];

require '../models/home.php';
$cedula=$_POST['ClieCedula'];
$nombre=$_POST['ClieNombre'];
$telefono=$_POST['ClieTelPersonal'];
$direccion=$_POST['ClieDireccion'];
$email=$_POST['ClieEmailPersonal'];


$editar3="UPDATE `cliente` SET `ClieCedula`='$cedula',`ClieNombre`='$nombre',`ClieTelPersonal`='$telefono',`ClieDireccion`='$direccion',`ClieEmailPersonal`='$email' where IdCliente=".$id4;

$resultado=mysqli_query($conn,$editar3);

if($resultado){
    echo "<script languaje='JavaScript'>
     alert('Los datos se editaron correctamente de la BD');
     location.assign('../views/client.php');
     </script>";
}else{
    echo "<script languaje='JavaScript'>
    alert('Los datos No se editaron correctamente de la BD');
    location.assign('../views/client.php');
    </script>";
}
?>