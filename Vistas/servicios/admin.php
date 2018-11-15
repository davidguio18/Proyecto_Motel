<!DOCTYPE html>
<html>
<head>
	<title>Listado general de servicios</title>
</head>
<body>
	<h1 align="center">Listado de Servicios</h1>
	<table border="2">
		<tbody>
			<tr>
				<th>Id</th>
				<th>Producto</th>
				<th>Precio</th>
				<th>Solicitud</th>
				<th>Alquiler</th>
				<th>Cantidad</th>
				<th>Acci&oacute;n</th>
			</tr>
			<?php foreach($servicios as $servicio){ ?>
			<tr>
				<th><?= $servicio->id_servicio; ?></th>
				<td><?= $servicio->producto; ?></td>
				<td><?= $servicio->precio; ?></td>
				<td><?= $servicio->solicitud; ?></td>
				<td><?= $servicio->alquiler; ?></td>
				<td><?= $servicio->cantidad; ?></td>
				<td> <a href="index.php?c=servicios&a=update&id=<?= $servicio->id_servicio; ?>">Editar</a> </td>
				<td> <a href="index.php?c=servicios&a=delete&id=<?= $servicio->id_servicio; ?>">Eliminar</a> </td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>