<html>
<head>
	<title></title>
</head>
<body>

	<h1>Registrar Habitacion</h1><br>

	<form action="" method="post" autocomplete="off">
		<label>Numero:</label>
		<input type = "text" name="habitaciones[numero]"
		value="" onkeypress="return valida(event)" required  minlength="3" maxlength="3"/><br><br>

		<label>Tipo:</label>
		<select name="habitaciones[tipo]" required>
			<option value="">Seleccione</option>
			<option value="Premium">Premium</option>
			<option value="Basica">Basica</option>
		</select><br><br>

		<label>Valor:</label>
		<input type = "text" name="habitaciones[valor_noche]"
		value="" onkeypress="return valida(event)" required /><br><br>

		<label>Estado:</label>
		<select name="habitaciones[estado]" required>
			<option value="">Seleccione</option>
			<option value="Activo">Activo</option>
			<option value="Inactivo">Inactivo</option>
		</select><br><br>

		<button type="submit">Registrar</button>

</form>

		<?php 
	if(isset($_GET["error"])){
		echo "<h4>Habitacion ya registrada</h4>";
	}
	 ?>


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

function Validacion(e){
	if($("#id option:selected").val() == 0){
		alert("Debe Seleccionar una categoria");
		return false;
	}
}
</script>
</body>
</html>