<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.cssS">
<script>
function eliminarProducto(id) {
  if (confirm("¿Está seguro que desea eliminar el producto?")) {
    window.location.href = "./eliminar_producto.php?id="+id;
  }
}
</script>
</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de <b>Productos</b></h2></div>
                    <div class="col-sm-4">
                        <a href="guardar.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Producto</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>ID</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "tpfinall");

// Consulta SQL para obtener los datos de la tabla de productos
$query = "SELECT nombre, descripción, precio, id, imagen FROM frutas";

// Ejecución de la consulta SQL
$resultado = mysqli_query($conexion, $query);

// Iteración sobre los resultados de la consulta SQL
while($unaFila = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
        echo "<td>".$unaFila["nombre"]."</td>";
        echo "<td>".$unaFila["descripcion"]."</td>";
        echo "<td>".$unaFila["precio"]."</td>";
        echo "<td>".$unaFila["id"]."</td>";
        echo "<td>".$unaFila["imagen"]."</td>";
        echo "<td> 
                            <a class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
                            <a href='javascript:void(0);' onclick='eliminarProducto(".$unaFila["id"].")' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>
                      </td>";
    echo "</tr>";
}

mysqli_close($conexion);
                    ?>
                </tbody>
            
