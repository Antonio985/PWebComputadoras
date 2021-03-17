<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
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
    <form action="QueryProveedores.php" method="POST" enctype="multipart/form-data">
    <fieldset>    
    <label for="Nombre">Nombre de Proveedor: </label>
        <input type="text" name="Nombre" maxlength="30" require placeholder="Nombre Proveedor">
        <br><br>
        <label for="Telefono">Telefono : </label>
        <input type="text" name="Telefono" maxlength="30" require placeholder="Telefono">
        <br><br>
        
</fieldset>

<fieldset id="cal">        

        <input type="submit" name="enviar" value="Guardar">
        </fieldset>
        
        <script language="javascript">alert("Se ha registrado exitosamente");</script>

       


</center>
    </form>
</body>
</html>