<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Registrar nuevo usuario</title>
</head>
<body>
 <h1>Registar usuario</h1>
 <form action="" method="post" autocomplete="off">
 	<label>Nombres</label>
 	<input required type="text" name="Usuarios[nombres]" value=""/>
 	<label>Apellidos</label>
 	<input required type="text" name="Usuarios[apellidos]" value=""/>
 	<select name="Usuarios[perfil];" required>
  		<option value="">Selecci&oacute;n</option>
  		<option value="Administrador">Administrador</option>
 		<option value="Vendedor">Vendedor</option>
	</select>
 	<label>Documento</label>
 	<input required  type="text" name="Usuarios[documento]" onkeypress="return valida(event)"/>
 	<label>Contrasena</label>
 	<input required="" type="password" name="Usuarios[contrasena]" />
 	<button type="submit">Crear Usuario</button>

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
