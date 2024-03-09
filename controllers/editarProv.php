<?php
$id3=$_POST['Id'];

require '../models/home.php';
$email=$_POST['Email_Proveedor'];
$nombre=$_POST['Nombre_Proveedor'];
$telefono=$_POST['Telefono_Personal'];
$direccion=$_POST['Direccion_proveedor'];


$editar2="UPDATE `proveedor` SET `ProvEmailPersonal`='$email',`ProvNombre`='$nombre',`ProvTelPersonal`='$telefono',`ProvDireccion`='$direccion' where IdProveedor=".$id3;

$resultado=mysqli_query($conn,$editar2);

if($resultado){
    echo "<script languaje='JavaScript'>
     alert('Los datos se editaron correctamente de la BD');
     location.assign('../views/providers.php');
     </script>";
}else{
    echo "<script languaje='JavaScript'>
    alert('Los datos No se editaron correctamente de la BD');
    location.assign('../views/providers.php');
    </script>";
}
?>