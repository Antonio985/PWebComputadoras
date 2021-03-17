<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ventas</title>
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
    <form action="QueryVentas.php" method="POST">
    <fieldset>
        <p>Seleccione a un Empleado que realizo la venta:</p>
        <p>Empleados:
      <select name="IdEmpleado">
        <?php
        require('conexion.php');
          $query = $conexion -> query ("SELECT * FROM empleados");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[IdEmpleado].'">'.$valores[Nombre].'</option>';
          }
        ?>
      </select>
        <br><br>
        <label for="Total">Total de la venta: </label>
        <input type="number" name="Total" require>
        <br><br>
        <label for="Cantidad">cantidad de productos: </label>
        <input type="number" name="Cantidad" require>
        <br><br>
        <label for="Fecha">Fecha de Venta : </label>
        <input type="date" name="FechaVenta" require>
        <br><br>
        
        <br><br>
        <button type="submit" name="enviar">Guardar</button> 
        <script language="javascript">alert("Se ha registrado exitosamente");</script>
        </fieldset>
</center>
</body>
</html>