<?php
    if(!empty($_POST["nombre_arg"]) && !empty($_POST["descripcion_arg"])){
		
		$type = pathinfo($_FILES["imagen_arg"]['name'], PATHINFO_EXTENSION);
		$data = file_get_contents($_FILES["imagen_arg"]['tmp_name']);
		$imagenBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		
		
        $conexion = mysqli_connect("localhost", "root", "", "tpfinall");

        $query = "INSERT INTO frutas (nombre_arg, descripcion_arg, imagen_arg) VALUES ('".$_POST['nombre_arg']."', '".$_POST['descripcion_arg']."', '".$imagenBase64."')";
        $resultado = mysqli_query($conexion, $query);

        if($resultado === true){
            echo "<p>Se agrego el producto correctamente!</p>";
        }
        else{
            echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
        }

        mysqli_close($conexion);
    }
?>

<form method="post" action="" enctype='multipart/form-data'>
	<label>Imagen</label>
	<input type="file" id="imagen_arg" name="imagen_arg"><br>
    <label for="nombre_arg">Nombre</label>
    <input type="text" id="nombre_arg" name="nombre_arg"><br>    
    <label for="descripcion_arg">Descripción</label>
    <textarea id="descripcion_arg" name="descripcion_arg"></textarea>
    <button type="submit">Agregar Producto</button>
    <a href="productosarg.php">Cancelar</a>
</form>