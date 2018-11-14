<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Actualizar <?= $vehiculo->placa?> </h1>

	<form action="" method="post" autocomplete="off">
		<label>Placa:</label>
		<input type="text" name="Vehiculos[placa]" value="<?= $vehiculo->placa ?>" required="" maxlength="6" minlength="6">

		<label>Marca:</label>
		<input type="text" name="Vehiculos[marca]" value="<?= $vehiculo->marca ?>" required="" >

		<label>Registro:</label>
		<input type="date" name="Vehiculos[registro]" value="<?= $vehiculo->registro ?>" required>

		
		<label>Servicio:</label>
		<select name="Vehiculos[servicio]" required="">
			<option value="Publico" <?= ($vehiculo->servicio=="Publico")? 'selected="selected"' : '' ?>>Publico</option>

			<option value="Particular" <?= ($vehiculo->servicio=="Particular")? 'selected="selected"' : '' ?>>Particular</option>
		</select>

		<button type="submit">Actualizar producto</button>
	</form>
</html>