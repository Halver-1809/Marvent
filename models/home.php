<?php
$conn = new mysqli("127.0.0.1", "root", "", "marventprueba");
$conexion=mysqli_connect("localhost","root","","marventprueba");

if($conn->connect_error){
    die('ERROR DE  CONEXION ' . $conn->connect_error);
}
?>