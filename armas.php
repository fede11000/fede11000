<?php
require_once "includes/config.php";

$sql = "SELECT * FROM " . $_GET['tabla'];
$res = mysqli_query($conn, $sql);

if (!$res) {
    die('Error de Consulta: ' . mysqli_errno($conn));
}

$dou = array();

while ($fila = mysqli_fetch_assoc($res)) {
    $dou[] = $fila;
}


$section = "vistas/armas.php";
require_once "vistas/layout.php";