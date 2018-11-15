<!DOCTYPE html>
<html>
<head>
	<title>Registrar Servicio</title>
</head>
<body>
	<h1>Registrar Servicio</h1>

	<form action="" method="post" autocomplete="off">
		<label>Producto:</label>
		<select name="Servicios[producto]" required="">
			  
			<option>seleccione</option>
			<?php 
				require_once("Modelos/Productos.php");
				$prod = new Productos();
				$productos = $prod->listar();
			 ?>

			<?php foreach ( $productos as $producto) {?>
			<option value="<?=$producto->id_producto; ?>"><?=$producto->nombre; ?></option>
			<?php } ?>
		</select>

		<label>Precio:</label>
		<input type="text" name="Servicios[precio]" value="" required="">

		<label>Solicitud:</label>
		<input type="text" name="Servicios[solicitud]" value="<?php echo date ('  Y/m/d  h:i:s');?>" required="">


		<label>Alquiler:</label>
		<input type="text" name="Servicios[alquiler]" value="" required="">

		<label>Cantidad:</label>
		<input type="text" name="Servicios[cantidad]" value="" required="">

		<button type="submit">Registrar</button>
	</form>
</body>
</html>
