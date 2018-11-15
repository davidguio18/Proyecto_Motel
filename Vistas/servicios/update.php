<!DOCTYPE html>
<html>
<head>
	<title>Actualizar servicio</title>
</head>
<body>
	<h1>Actualizar Servicio</h1>
	<form action="" method="post" autocomplete="off">
		<label>Producto:</label>
		<input type="text" name="Servicios[producto]" value="<?= $servicio->producto ?>">

		<label>Precio:</label>
		<input type="text" name="Servicios[precio]" value="<?= $servicio->precio ?>">

		<label>Solicitud:</label>
		<input type="text" name="Servicios[solicitud]" value="<?= $servicio->solicitud ?>">

		<label>Alquiler:</label>
		<input type="passsword" name="Servicios[alquiler]" value="<?= $servicio->alquiler ?>">

		<label>Cantidad:</label>
		<input type="passsword" name="Servicios[cantidad]" value="<?= $servicio->cantidad ?>">

		<button type="submit">Actualizar</button>
	</form>
</body>
</html>
