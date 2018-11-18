<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.3.1.min.js"></script>
    <title>Actualizar Alquiler</title>
</head>
<body>
<strong> Actualizar </strong> Alquiler | <?= $alquiler->id_alquiler ?>
    <form method="post">
        <label>Numero Habitaci&oacute;n</label><br>
        <select required name="Alquiler[habitacion]" id="alquiler_habitacion" >
            <option value=" ">Seleccion</option>
            <?php
                require_once ("Modelos/habitaciones.php");
                $hab = new habitaciones();
                $numHab = $hab->listar();
                foreach ($numHab as $numHabitacion) { ?>
                <option value="<?= $numHabitacion->id_habitacion ?>"><?= $numHabitacion->numero ?></option>
            <?php } ?>
        </select><br><br>
        <label>Placas Vehiculo</label><br>
        <select required name="Alquiler[cliente]">
            <option value="<?= $alquiler->id_cliente ?>"><?= $alquiler->placa ?></option>
            <?php foreach ($placaVehiculo as $placa) { ?>
                <option value="<?= $placa->id_cliente ?>"><?= $placa->placa ?></option>
            <?php } ?>
        </select><br><br>
        <label>Valor Hora</label> <br>
        <input type="text" name="Alquiler[valor_hora]" id="valorhora" value="<?= $alquiler->valor_hora ?>">
        <br><br>
        <label>Dia y Hora Ingreso</label><br>
        <input type="text" name="Alquiler[ingreso]" readonly value="<?php $alquiler->ingreso ?>"><br><br>
        <label>Dia y Hora Salida</label><br>
        <input type="datetime" name="Alquiler[salida]" required  value="<?php echo date(' Y/m/d h:i:s'); ?>" readonly><br><br>
        <label>Vendedor</label><br>
        <select required name="Alquiler[vendedor]">
            <option value="">Selecci&oacute;n</option>
            <?php foreach ($vendedores as $vendedor) { ?>
                <option value="<?= $vendedor->id_usuario ?>"><?= $vendedor->nombres .'  '. $vendedor->apellidos ?></option>
            <?php } ?>
        </select><br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
    <script type="text/javascript">
        function getValor() {
            var idHabitacion = $("#alquiler_habitacion").val();

            $.ajax({
                method: "POST",
                url: "index.php?c=habitaciones&a=getValor",
                data: { id: idHabitacion }
            }).done(function(msg) {
                // alert( "Data Saved: " + msg );
                $("#valorhora").val(msg);
            });
        }
    </script>
</html>