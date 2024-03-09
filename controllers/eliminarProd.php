<?php
$id=$_GET['id'];

require '../models/home.php';

$borrar="DELETE from producto where IdProducto=".$id;
$resultado=mysqli_query($conn,$borrar);

if($resultado){
    echo "<script languaje='JavaScript'>
     alert('Los datos se eliminaron correctamente de la BD');
     location.assign('../views/inventory.php');
     </script>";
}else{
    echo "<script languaje='JavaScript'>
    alert('Los datos No se eliminaron correctamente de la BD');
    location.assign('../views/inventory.php');
    </script>";
}
?>