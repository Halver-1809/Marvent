<?php
include("../models/home.php");

$nombreP = $_GET['prod'];

$sql = "SELECT * FROM producto WHERE ProdNombreProducto = '$nombreP'";
$resFiltro = $conn->query($sql);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro;

if ($totalFiltro) {
    echo json_encode($totalFiltro);
} else {
    echo json_encode(0);
}

?>