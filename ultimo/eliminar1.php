
<?php 

    $idProducto = $_GET["id"]; //VALIDAR!!!!!
    
    $conexion = mysqli_connect("localhost", "root", "", "tpfinall");

    $query = "DELETE FROM arge WHERE id_arg = $idProducto";
    $resultado = mysqli_query($conexion, $query);

    if($resultado === true){
        echo "<p>Se elimino el producto correctamente!</p>";
        echo "<a href='./productos.php'>Volver</a>";
    }
    else{
        echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
        echo "<a href='./productos.php'>Volver</a>";
    }

    mysqli_close($conexion);
?>