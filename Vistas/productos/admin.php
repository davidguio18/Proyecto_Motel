<!DOCTYPE html>
<html>
<head>
	<title>Listado general de productos</title>

</head>
<body>
	

	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Marca</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Precio</th>
				<th scope="col">estado</th>
				<th scope="col">Acciones</th>
				<th scope="col">Acciones</th>
				
			</tr>
			<?php
			foreach ( $productos as $producto) {?>
				
			<tr>
				<th scope="row"><?=$producto->id_producto; ?></th>
				<td><?=$producto->nombre; ?></td>
				<td><?=$producto->marca; ?></td>
				<td><?=$producto->cantidad; ?></td>
				<td><?=$producto->precio; ?></td>
				<td><?=$producto->estado; ?></td>
				<td><a href="index.php?c=producto&a=update&id=<?=$producto->id_producto;?>">Editar</a></td>
				<td><a href="index.php?c=producto&a=delete&id=<?=$producto->id_producto;?>">Eliminar</a></td>
				

			</tr>	
			<?php } ?>

		</tbody>
		


	</table>

</body>
</html>