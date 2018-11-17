<html>
<head>
	<title></title>
	<link rel="stylesheet" type ="text/css" href="css/estilos">
</head>
<body>
	<a href="index.php?c=habitaciones&a=admin">volver</a>
	<h1 align="center">Lista Habitaciones</h1><br><br>
	
	<table width="100%"  border = "1" cellspacing ="0" cellpadding="0">
		<tbody>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Numero</th>
				<th scope="col">Tipo</th>
				<th scope="col">Valor_noche</th>
				<th scope="col">Estado</th>
				<th scope="col">Acciones</th>
			</tr>
			<?php foreach($habitacion as $habitacion) { ?> 
			<tr>
				<th scope="row"><?= $habitacion->id_habitacion; ?></th>
				<td><?= $habitacion->numero; ?></td>
				<td><?= $habitacion->tipo; ?></td>
				<td><?= $habitacion->valor_noche; ?></td>
				<td><?= $habitacion->estado; ?></td>
				<td><a href="index.php?c=habitaciones&a=update&id=<?= $habitacion->id_habitacion; ?>">Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?c=habitaciones&a=delete&id=<?= $habitacion->id_habitacion; ?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>