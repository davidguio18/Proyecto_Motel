<html>
<head>
	<title></title>
</head>
<body>
	<h1>Actualizar Habitacion</h1><br>

	<form action="" method="post" autocomplete="off">
		<label>Numero:</label>
		<input type = "text" name="habitaciones[numero]"
		value="<?= $habitacion->numero?>" onkeypress="return valida(event)" minlength="3" maxlength="3"/><br><br>

		<label>Tipo:</label>
		<select name="habitaciones[tipo]">
			<option value="Premium" <?= ($habitacion->tipo=="Premium")? 'selected="selected"' : ''?>>Premium</option>
			<option value = "Basica" <?= ($habitacion->tipo=="Basica")? 'selected="selected"' : ''?>>Basica</option>
		</select><br><br>

		<label>Valor:</label>
		<input type = "text" name="habitaciones[valor_noche]"
		value="<?= $habitacion->valor_noche?>" onkeypress="return valida(event)" /><br><br>

		<label>Estado:</label>
		<select name="habitaciones[estado]">
			<option>Seleccione</option>
			<option value="Activo" <?= ($habitacion->estado=="Activo")? 'selected="selected"' : ''?>>Activo</option>
			<option value = "Inactivo" <?= ($habitacion->estado=="Inactivo")? 'selected="selected"' : ''?>>Inactivo</option>
		</select><br><br>

		<button type="submit">Editar</button>

</form>

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
</body>
</html>