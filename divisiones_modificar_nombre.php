<?php
require_once "includes/config.php";

$sql = "UPDATE venta_de_armas SET name_arma = '".$_POST["cambio"]."' WHERE id_arma = ".$_POST["id"]."";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die('Error de Consulta: ' . mysqli_errno($conn));
}

header("Location: divisiones_lista.php");
?>