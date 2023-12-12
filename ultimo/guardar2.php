<?php
    if(!empty($_POST["nombre_japon"]) && !empty($_POST["descripcion_japon"])){
		
		$type = pathinfo($_FILES["imagen_japon"]['name'], PATHINFO_EXTENSION);
		$data = file_get_contents($_FILES["imagen_japon"]['tmp_name']);
		$imagenBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		
		
        $conexion = mysqli_connect("localhost", "root", "", "tpfinall");

        $query = "INSERT INTO frutas (nombre_japon, descripcion_fruta, imagen_japon) VALUES ('".$_POST['nombre_japon']."', '".$_POST['descripcion_fruta']."', '".$imagenBase64."')";
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
	<input type="file" id="imagen_japon" name="imagen_japon"><br>
    <label for="nombre_japon">Nombre</label>
    <input type="text" id="nombre_japon" name="nombre_japon"><br>    
    <label for="descripcion_japon">Descripción</label>
    <textarea id="descripcion_japon" name="descripcion_japon"></textarea>
    <button type="submit">Agregar Producto</button>
    <a href="productosjapon.php">Cancelar</a>
</form>