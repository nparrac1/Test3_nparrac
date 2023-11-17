<?php  

include("../../modelo/conexion.php");

$id_recibido = $_POST['id'];
$marca = $_POST["marca"];
$descripcion = $_POST["descripcion"];
$sku = $_POST["sku"];
$precio = $_POST["precio"];

$sql = "UPDATE osb SET marca='$marca',descripcion='$descripcion',sku='$sku',precio='$precio' WHERE id = '$id_recibido'";
$result = mysqli_query($conexion, $sql);    


header("Location: ../../index.php");




?>