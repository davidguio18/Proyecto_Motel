<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Listado de usuarios</title>
</head>
<body>
<table width="100%" border="2" cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Nombres</th>
			<th scope="col">Apellidos</th>
			<th scope="col">perfil</th>
			<th scope="col">Documento</th>
			
			<th scope="col" colspan="2">Acciones</th>
		</tr>
		<?php foreach($usuarios as $usuario) {?>
		<tr>
			<th scope="row"><?= $usuario->id_usuario; ?></th>
			<th ><?= $usuario->nombres; ?></th>
			<th ><?= $usuario->apellidos; ?></th>
			<th ><?= $usuario->perfil; ?></th>
			<th ><?= $usuario->documento; ?></th>
			
			<th ><a href="index.php?c=usuarios&a=update&id=<?= $usuario->id_usuario; ?>">Editar</th>
			<th ><a href="index.php?c=usuarios&a=delete&id=<?= $usuario->id_usuario; ?>">Eliminar</th>
		</tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>