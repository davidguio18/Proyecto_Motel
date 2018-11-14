<!DOCTYPE html>
<html>
<head>
	<title> Vehiculos que ingresaron</title>
</head>
<body>
	<h1 align="center">Listado de Vehiculos</h1>
	<table border="2">
		<tbody>
			<tr>
				<th>Id del cliente</th>
				<th>Placa</th>
				<th>Marca</th>
				<th>Servicio</th>
				<th>Registro</th>
				<th colspan="2">Acciones</th>
			</tr>
			<?php foreach($vehiculos as $vehiculo){ ?>
			<tr>
				<th><?= $vehiculo->id_cliente; ?></th>
				<td><?= $vehiculo->placa; ?></td>
				<td><?= $vehiculo->marca; ?></td>
				<td><?= $vehiculo->servicio; ?></td>
				<td><?= $vehiculo->registro; ?></td>
				
				<td> <a href="index.php?c=vehiculos&a=update&id=<?= $vehiculo->id_cliente; ?>">Editar</a> </td>
				<td> <a href="index.php?c=vehiculos&a=delete&id=<?= $vehiculo->id_cliente; ?>">Eliminar</a> </td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>