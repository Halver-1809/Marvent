<?php

session_start();

if(isset($_SESSION['UsuEmail'])){
    
    $_SESSION['UsuEmail']=null;
    header('location:../views/login.php');
   
}
else{
    echo "No existen sessiones";
}


?>