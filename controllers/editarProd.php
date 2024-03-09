<?php
$id2=$_POST['Id'];

require '../models/home.php';
$nombre=$_POST['NombreProducto'];
$precio=$_POST['PrecioProducto'];
$marca=$_POST['MarcaProducto'];
$fechaExpedicion=$_POST['FechaProducto'];
$cantidad=$_POST['CantidadProducto'];

$editar="UPDATE `producto` SET `ProdNombreProducto`='$nombre',`ProdPrecio`='$precio',`ProdMarca`='$marca',`ProdFechaExpedicion`='$fechaExpedicion',`ProdCantidad`='$cantidad' where IdProducto=".$id2;

$resultado=mysqli_query($conn,$editar);

if($resultado){
    echo "<script languaje='JavaScript'>
     alert('Los datos se editaron correctamente de la BD');
     location.assign('../views/inventory.php');
     </script>";
}else{
    echo "<script languaje='JavaScript'>
    alert('Los datos No se editaron correctamente de la BD');
    location.assign('../views/inventory.php');
    </script>";
}
?>