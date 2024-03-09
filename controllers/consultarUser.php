<?php
include("../models/home.php");

$documento=$_GET['doc'];

$sql="SELECT * FROM cliente WHERE ClieCedula = $documento";
$resFiltro = $conn->query($sql);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro;

if($totalFiltro){
    echo json_encode($totalFiltro);
}else{
    echo json_encode(0);
}



?>