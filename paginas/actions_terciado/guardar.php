<?php  

include("../../modelo/conexion.php");

$marca = $_POST["marca"];
$descripcion = $_POST["descripcion"];
$sku = $_POST["sku"];
$precio = $_POST["precio"];

$sql = "INSERT INTO osb (marca, descripcion, sku, precio) VALUES ('$marca','$descripcion','$sku','$precio')";
$result = mysqli_query($conexion, $sql);    


header("Location: ../../index.php");




?>