<?php
session_start();

if(isset($_SESSION['UsuEmail'])){
    
    header('../views/principal.php');
}else{
    echo "No existe session";
    header('../views/login.php');
}


?>