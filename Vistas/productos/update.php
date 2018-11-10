<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1 align="center">Actualizar <?= $producto->nombre ?></h1><br><br>

<form action="" method="post">
	<label>Nombre:</label>
	<input type="text" required name="Productos[nombre]" value="<?= $producto->nombre?>"/>
	<label>Marca:</label>
	<input type="text" required name="Productos[marca]" value="<?= $producto->marca?>"/>
	<label>Cantidad:</label>
	<input type="number" required name="Productos[cantidad]" value="<?= $producto->cantidad?>"/>
	<label>Precio:</label>
	<input type="number" required name="Productos[precio]" value="<?= $producto->precio?>"/>
	<label>Estado:</label>
	<select  name="Productos[estado]">
	<option value="Activo" <?= ($producto->estado=="Activo")? 'selected="selected"':''?>>Activo</option>
	<option value="Inactivo" <?= ($producto->estado=="Inactivo")? 'selected="selected"':''?>>Inactivo</option>
	</select>
	<button type="submit" name="submit">Actualizar Usuario </button>
</form>
</body>
</html>