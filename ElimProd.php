<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Productos</title>
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
            <li><a href="RegProveedores.php">Registro Proveedores</a></li>
            <li><a href="RegVentas.php">Registro Ventas</a></li>
            <li><a href="ElimProd.php">Administrar Productos</a></li>
            <li><a href="ElimUsuarios.php">Administrar Empleados</a></li>

            </ul>
        </nav>
    </header>

<br><br>


    <center>
    <form action="ElimProd.php" method="POST">
    <label for="id">ID a Eliminar: </label>
    <input type="number" name="id" maxlength="30" require placeholder="ID a Eliminar">
    <br><br>
    <input type="submit" name="enviar" value="Eliminar">
    <br><br>

<table>
<thead>
    <tr>
    <th><b><center>ID Producto </th></b></center>
    <th><b><center>ID Proveedor </th></b></center>
    <th><b><center>Nombre </th></b></center>
    <th><b><center>Precio </th></b></center>
    <th><b><center>Stock</th></b></center>
    </tr>
</thead>
<?php
    include("conexion.php");
    $resultado= mysqli_query($conexion,"Select * FROM productos ");
    while($consulta = mysqli_fetch_array($resultado)){
?>
<tr>
    <td><?php echo $consulta['IdProducto']?></td>
    <td><?php echo $consulta['IdProveedor']?></td>
    <td><?php echo $consulta['Nombre']?></td>
    <td><?php echo $consulta['Precio']?></td>
    <td><?php echo $consulta['Stock']?></td>
</tr>
<?php
}
?>
</table>
<br><br>
<?php
if($_POST){
    include("conexion.php");
    
    echo "<br><br>";
    if(isset($_POST['Eliminar'])){
        echo '<script language="javascript">alert("Se ha elimanado");</script>';
    }else{
    $id = $_POST['id'];

    $resultado= mysqli_query($conexion,"DELETE  FROM productos  where IdProducto=$id");
    while($consulta = mysqli_fetch_array($resultado)){
        echo
        "
        <table width=\"100%\" border=\"1\">
        <thead>
            <tr>
            <th><b><center>ID Producto </th></b></center>
            <th><b><center>Nombre Proveedor </th></b></center>
            <th><b><center>Nombre </th></b></center>
            <th><b><center>Precio </th></b></center>
            <th><b><center>Stock</th></b></center>
            </tr>
        </thead>
            <tr>
                <td>".$consulta['idMigracion']."</td>
                <td>".$consulta['NombreUsuario']."</td>
                <td>".$consulta['FechaSalida']."</td>
                <td>".$consulta['FechaRegreso']."</td>
            </tr>
        </table

        ";
    }
}
}
?>
</center>
</body>
</html>