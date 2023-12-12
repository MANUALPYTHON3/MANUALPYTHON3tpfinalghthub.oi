<?php
    if(!empty($_POST["nombre_fruta"]) && !empty($_POST["descripcion_fruta"])){
		
		$type = pathinfo($_FILES["imagen_fruta"]['name'], PATHINFO_EXTENSION);
		$data = file_get_contents($_FILES["imagen_fruta"]['tmp_name']);
		$imagenBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		
		
        $conexion = mysqli_connect("localhost", "root", "", "tpfinall");

        $query = "INSERT INTO frutas (nombre_fruta, descripcion_fruta, imagen_fruta) VALUES ('".$_POST['nombre_fruta']."', '".$_POST['descripcion_fruta']."', '".$imagenBase64."')";
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
	<input type="file" id="imagen_fruta" name="imagen_fruta"><br>
    <label for="nombre_fruta">Nombre</label>
    <input type="text" id="nombre_fruta" name="nombre_fruta"><br>    
    <label for="descripcion_fruta">Descripción</label>
    <textarea id="descripcion_fruta" name="descripcion_fruta"></textarea>
    <button type="submit">Agregar Producto</button>
    <a href="productosfrutas.php">Cancelar</a>
</form>