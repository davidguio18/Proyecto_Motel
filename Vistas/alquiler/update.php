<?php
if ($_SESSION["Perfil"] == "Administrador"){
    include_once ("Vistas/cabecera.php");
}else if ($_SESSION["Perfil"] == "Vendedor"){
    include_once ("Vistas/cabeceraVendedor.php");
}
?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong> Actualizar </strong> Alquiler -> <strong><?= $alquiler->id_alquiler ?></strong>
                            </div>
                            <div class="card-body card-block">
                                <form method="post">
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Numero Habitaci&oacute;n</label><br>
                                        <label class="form-control"><?= $alquiler->habitacion->numero ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Placas Vehiculo</label><br>
                                        <label class="form-control"><?= $alquiler->cliente->placa ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Valor Hora</label><br>
                                        <label class="form-control"><?= $alquiler->valor_hora ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Dia y Hora Ingreso </label><br>
                                        <label class="form-control"><?= $alquiler->ingreso ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Dia y Hora Salida</label><br>
                                        <input type="datetime" name="Alquiler[salida]" required class="form-control" value="<?php echo date(' Y/m/d h:i:s'); ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Vendedor</label><br>
                                        <label class="form-control"><?= $alquiler->vendedor->nombres ." ". $alquiler->vendedor->apellidos ?></label>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Editar
                                        </button>
                                    </div>
                                </form>

<?php require_once("Vistas/footer.php"); ?>