<?php
require_once "includes/config.php";

$sql = "UPDATE venta_de_armas SET nacioanlidad = '".$_GET["cambio"]."' WHERE id_arma = ".$_GET["id"]."";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die('Error de Consulta: ' . mysqli_errno($conn));
}

header("Location: divisiones_lista.php");
?>