<?php

include("conexion.php");


if (isset($_POST['btn1'])) {
	if (strlen($_POST['nombre']) >= 1  && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1) {
		$nombre = ($_POST['nombre']);
		$apellido = ($_POST['apellido']);
		$correo = ($_POST['correo']);
		$telefono = ($_POST['telefono']);
		$consulta = "INSERT INTO `user`( nombre, apellido, correo, telefono) VALUES ('$nombre','$apellido','$correo','$telefono')";
		$resultado = mysqli_query($conexion, $consulta);
		if ($resultado) {
?>
			<h3 class="ok" style="font-family: 'Permanent Marker', cursive;">!Te has registrado correctamente!</h3>
		<?php
		} else {
		?>
			<h3 class="bad" style="font-family: 'Permanent Marker', cursive;">!ups ha ocurrido un error!</h3>
		<?php
		}
	} else {
		?>
		<h3 class="bad" style="font-family: 'Permanent Marker', cursive;">!Por favor complete los campos!</h3>
<?php
	}
}




?>
