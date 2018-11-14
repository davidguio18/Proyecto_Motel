<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Actualizar usuario</title>
</head>
<body>
 <h1>Actualizar <?= $usuario->nombres ?></h1>
 <form action="" method="post" autocomplete="off">
 	<label>Nombres</label>
 	<input type="text" name="Usuarios[nombres]" value="<?= $usuario->nombres ?>" required />
 	<label>Apellidos</label>
 	<input type="text" name="Usuarios[apellidos]" value="<?= $usuario->apellidos ?>" required />
 	<label>Estado:</label>
 	<select name="Usuarios[perfil]" required>
 		<option value="Administrador" <?= ($usuario->perfil=="Administrador") ? 'selected="selected"' : '' ?>>Administrador</option>
 		<option value="Vendedor"<?= ($usuario->perfil=="Vendedor") ? 'selected="selected"' : '' ?>>Vendedor</option>
 	</select>
 	<label>Documento</label>
 	<input type="text" required name="Usuarios[documento]" value="<?= $usuario->documento ?>" onkeypress="return valida(event)"/>
 		<label>Contrasena</label>
 	<input type="password" name="Usuarios[contrasena]" value="<?= $usuario->contrasena ?>"/>

 	
 	<button type="submit">Guardar cambios</button>
 </form>
</body>
<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
</html>