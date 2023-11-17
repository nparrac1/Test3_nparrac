<?php  

include("../../modelo/conexion.php");

$id_recibido = $_GET["id"];


$sql = "DELETE FROM osb WHERE id = '$id_recibido'";
$result = mysqli_query($conexion, $sql);    


header("Location: ../../index.php");




?>