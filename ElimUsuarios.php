<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuarios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><img src="menu-botton.png" alt=""></label>

        <nav class="menu">
            <ul>
            <li><a href="Registroempleados.php">Registro de Empleados</a></li>
            <li><a href="RegProd.php">Registro Productos</a></li>
            <li><a href="RegProveedores.php">Registro Productos</a></li>
            <li><a href="RegVentas.php">Registro Ventas</a></li>
            <li><a href="ElimProd.php">Administrar Productos</a></li>
            <li><a href="ElimUsuarios.php">Administrar Empleados</a></li>
            </ul>
        </nav>
    </header>

<br><br>


    <center>
    <form action="ElimUsuarios.php" method="POST">
   
    <label for="idEliminar">ID a Eliminar: </label>
    <input type="number" name="idEliminar" maxlength="30" require placeholder="ID de Empleado">
    <input type='submit' name='enviarEliminar' value='Eliminar'/>
    <br><br>
    <table>
    <thead>
    <tr>
        <th><b><center>IdEmpleado</th></b></center>
        <th><b><center>Nombre</th></b></center>
        <th><b><center>Apellidp</th></b></center>
        <th><b><center>Telefono</th></b></center>
        <th><b><center>Puesto</th></b></center>
        <th><b><center>Estado</th></b></center>
        
    </tr>
</thead>
</form>
<?php
include("conexion.php");

$resultado= mysqli_query($conexion,"Select * FROM empleados ");
while($consulta = mysqli_fetch_array($resultado)){
?>
    <tr>
        <td><center><?php echo $consulta['IdEmpleado']?></td></center>
        <td><center><?php echo $consulta['Nombre']?></td></center>
        <td><center><?php echo $consulta['Apellido']?></td></center>
        <td><center><?php echo $consulta['Telefono']?></td></center>
        <td><center><?php echo $consulta['Puesto']?></td></center>
        <td><center><?php echo $consulta['Estado']?></td></center>
        
			

						
    </tr>
<?php
}
?>
</table>

<br><br>

<?php
if($_POST){
    include("conexion.php");
    
    $idEliminar = $_POST['idEliminar'];
    $resultado= mysqli_query($conexion,"Delete  FROM empleados where IdEmpleado=$idEliminar");
    echo "<br><br>";
    echo '<script language="javascript">alert("Se ha elimanado");</script>';
}
?>

</center>
</form>
</body>
</html>