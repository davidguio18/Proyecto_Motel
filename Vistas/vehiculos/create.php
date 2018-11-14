<!DOCTYPE html>
<html>
<head>
	<title>Registrar Vehiculo</title>
</head>
<body>
	<h1>Registrar Vehiculo</h1>

	<form action="" method="post">
		<label>Placa:</label>
		<input type="text" name="Vehiculos[placa]" value="" required="" maxlength="6" minlength="6">

		<label>Marca:</label>
		<input type="text" name="Vehiculos[marca]" value="" required maxlength="25">

		<label>Registro:</label>
		<input type="date" name="Vehiculos[registro]" >

		<label>Servicio:</label>
		<select name="Vehiculos[servicio]">			
			<option value="Particular" >Particular</option>
			<option value="Publico" >Publico</option>
		</select>

		<button type="submit">Registrar </button>
	</form>
</html>