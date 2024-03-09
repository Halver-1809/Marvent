<?php

include '../models/home.php';

$usuario=$_POST['usuario'];
$contrasena=md5($_POST['contrasena']);


$consulta="SELECT*FROM usuarios where UsuEmailPersonal='$usuario' and UsuContrasena ='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);



if($resultado){
    $row_cnt = mysqli_num_rows($resultado);
    if($row_cnt>=1){
        
        session_start();
        $_SESSION["UsuEmail"]=$usuario;
        header('Location: ../views/principal.php');

    }else{
        echo "  'No existen usuarios');</script>";
        header('Location: ../views/login.php');
    }
}else{
    echo "<script>alert('No existen usuarios')</script>";
}




//$_SESSION['usuario']=$usuario;