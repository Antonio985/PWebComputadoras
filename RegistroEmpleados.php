<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
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
    <form action="QueryUsuario.php" method="POST" enctype="multipart/form-data">
    <fieldset>    
    <label for="Nombre">Nombre Usuario: </label>
        <input type="text" name="Nombre" maxlength="30" require placeholder="Nombre Usuario">
        <br><br>
        <label for="Apellido">Apellido : </label>
        <input type="text" name="Apellido" maxlength="30" require placeholder="Apellido">
        <br><br>
        <label for="Telefono">Telefono : </label>
        <input type="text" name="Telefono" maxlength="40" require placeholder="Telefono">
        <br><br>
        
        <label for="Puesto">Puesto : </label>
        <input type="radio" name="Puesto" value="Caja"> Caja
        <br>
        <input type="radio" name="Puesto" value="General">Ayudante General
        <br><br>
        
        <label for="Estado">Estado : </label>
        <input type="radio" name="Estado" value="Activo"> Activo
        <br>
        <input type="radio" name="Estado" value="Suspendido">Suspendido
        <br><br>

        <br><br>
</fieldset>

<fieldset id="cal">        

        <input type="submit" name="enviar" value="Guardar">
        <fieldset>
        
        <script language="javascript">alert("Se ha registrado exitosamente");</script>

       


</center>
    </form>
</body>
</html>