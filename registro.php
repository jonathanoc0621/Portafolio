<?php

include("conexion.php");


if (isset($_POST['btn1'])) {
	if (strlen($_POST['nombre']) >= 1  && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1) {
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$correo = trim($_POST['correo']);
		$telefono = trim($_POST['telefono']);
		$consulta = "INSERT INTO `user`( nombre, apellido, correo, telefono) VALUES ('$nombre','$apellido','$correo','$telefono')";
		$resultado = mysqli_query($conexion, $consulta);
		if ($resultado) {
			?>
			<h3 class="ok">!Te has registrado correctamente!</h3>
			<?php
        }  else {
			?>
			<h3 class="bad">!ups ha ocurrido un error!</h3>
			<?php	
		  }
		}  else {
			?>
			<h3 class="bad">!Por favor complete los campos!</h3>
			<?php
    }    
}
?>