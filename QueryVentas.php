<?php
include("conexion.php");   

$IdEmpleado=$_POST['IdEmpleado'];
$Total=$_POST['Total'];
$Cantidad=$_POST['Cantidad'];
$Fecha=$_POST['Fecha'];


$query="INSERT INTO ventas (IdEmpleado, Total, Cantidad, Fecha) 
values ('$IdEmpleado','$Total','$Cantidad','$Fecha')";
$resultado=$conexion->query($query);

header('Location: RegVentas.php');

?>