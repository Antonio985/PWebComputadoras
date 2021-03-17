<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ptoveedores</title>
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

    <form action="QueryRegProd.php" method="POST" enctype="multipart/form-data">
    <br>
        <label for="Nombre">Nombre del Producto: </label>
        <input type="text" name="Nombre" maxlength="30" require placeholder="Nombre de Producto">
               
       
        <fieldset> 
        <br>
        <label for="Precio">Precio del Producto: </label>
        <br>
        <input type="text" name="Precio" maxlength="30" require placeholder="Precio del Producto">
        <br>
        <label for="Stock">Existencia : </label><br>
        <input type="text" name="Stock" maxlength="30" require placeholder="Stock del Producto">
        <br>
        <p>Seleccione un proveedor del siguiente menu:</p>
        <p>Proveedores:
      <select name="IdProveedor">
      <?php
        require('conexion.php');
          $query = $conexion -> query ("SELECT * FROM proveedores");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[IdProveedor].'">'.$valores[Nombre].'</option>';
           
          }
        ?>
        <br><br>
        <br><input type="submit" name="enviar" value="Guardar"><br> 
        <script language="javascript">alert("Se ha registrado exitosamente");</script>
        </fieldset> 

</center>
    </form>
</body>
</html>