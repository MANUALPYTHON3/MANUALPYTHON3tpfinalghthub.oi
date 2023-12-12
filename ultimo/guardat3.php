<?php
    if(!empty($_POST["nombre_euro"]) && !empty($_POST["descripcion_euro"])){
		
		$type = pathinfo($_FILES["imagen_euro"]['name'], PATHINFO_EXTENSION);
		$data = file_get_contents($_FILES["imagen_euro"]['tmp_name']);
		$imagenBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		
		
        $conexion = mysqli_connect("localhost", "root", "", "tpfinall");

        $query = "INSERT INTO frutas (nombre_fruta, descripcion_euro, imagen_euro) VALUES ('".$_POST['nombre_fruta']."', '".$_POST['descripcion_euro']."', '".$imagenBase64."')";
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
	<input type="file" id="imagen_euro" name="imagen_euro"><br>
    <label for="nombre_fruta">Nombre</label>
    <input type="text" id="nombre_fruta" name="nombre_fruta"><br>    
    <label for="descripcion_euro">Descripción</label>
    <textarea id="descripcion_euro" name="descripcion_euro"></textarea>
    <button type="submit">Agregar Producto</button>
    <a href="productoseuro.php">Cancelar</a>
</form>