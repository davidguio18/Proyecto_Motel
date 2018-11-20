<?php include_once ("Vistas/cabecera.php"); ?>

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-header">
                                    <strong>Ingresar </strong> Alquiler
                                </div>
                                    <div class="card-body card-block">
                                        <form method="post">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">N&uacute;mero Habitaci&oacute;n</label>
                                                <select required name="Alquiler[habitacion]" id="alquiler_habitacion" onchange="getValor()" class="form-control" >
                                                    <option value="">Selecci&oacute;n</option>
                                                    <?php foreach ($numHab as $numHabitacion) { ?>
                                                        <option value="<?= $numHabitacion->id_habitacion ?>"><?= $numHabitacion->numero ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Placas Vehiculo</label>
                                                <select required name="Alquiler[cliente]" class="form-control">
                                                    <option value="">Selecci&oacute;n</option>
                                                    <?php foreach ($placaVehiculo as $placa) { ?>
                                                        <option value="<?= $placa->id_cliente ?>"><?= $placa->placa ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Valor Hora</label><br>
                                                <input type="text" id="valorhora" name= "Alquiler[valor_hora]" readonly="" class="form-control"/>
                                            </div>
                                            <label>Dia y Hora Ingreso</label><br>
                                            <input type="text" name="Alquiler[ingreso]" readonly value="<?php echo date(' Y/m/d h:i:s'); ?>"><br><br>
                                            <label>Dia y Hora Salida</label><br>
                                            <input type="datetime" name="Alquiler[salida]" required  value="0000-00-00" readonly><br><br>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Vendedor</label>
                                                <select required name="Alquiler[vendedor]" class="form-control">
                                                    <option value="">Selecci&oacute;n</option>
                                                    <?php foreach ($vendedores as $vendedor) { ?>
                                                        <option value="<?= $vendedor->id_usuario ?>"><?= $vendedor->nombres .'  '. $vendedor->apellidos ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Registrar
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Limpiar
                                                </button>
                                            </div>
                                        </form>

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

<?php require_once("Vistas/footer.php"); ?>