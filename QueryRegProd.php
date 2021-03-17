<?php
include("conexion.php");   
$idProv=$_POST['IdProveedor'];
$nombre=$_POST['Nombre'];
$precio=$_POST['Precio'];
$Stock=$_POST['Stock'];


$query="INSERT INTO productos (IdProveedor, Nombre, Precio, Stock) values
('$idProv','$nombre', '$precio', '$Stock')";
$resultado=$conexion->query($query);

header('Location: RegProd.php');
?>

