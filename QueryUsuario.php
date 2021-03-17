<?php
include("conexion.php");   

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Telefono=$_POST['Telefono'];
$Puesto=$_POST['Puesto'];
$Estado=$_POST['Estado'];



$query="INSERT INTO empleados (Nombre, Apellido, Telefono ,Puesto, Estado) values 
('$Nombre','$Apellido','$Telefono','$Puesto','$Estado')";
$resultado=$conexion->query($query);

header('Location: RegistroEmpleados.php');

?>