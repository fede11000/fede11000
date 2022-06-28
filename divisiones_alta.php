<?php
require_once "includes/config.php";

if(isset($_POST['nombre'])){
$sql = "INSERT INTO venta_de_armas VALUES(null,'".$_POST['tipo']."','".$_POST['nombre']."','".$_POST['nacionalidad']."',".$_POST['precio'].")";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die('Error de Consulta: ' . mysqli_errno($conn));
}

header("Location: divisiones_lista.php");
}

$section = "vistas/divisiones_alta.php";
require_once "vistas/layout.php";
?>