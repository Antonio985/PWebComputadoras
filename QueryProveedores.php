<?php
include("conexion.php");   

$Nombre=$_POST['Nombre'];
$Telefono=$_POST['Telefono'];


$query="INSERT INTO proveedores (Nombre, Telefono) values 
('$Nombre','$Telefono')";
$resultado=$conexion->query($query);

header('Location: RegProveedores.php');

?>

