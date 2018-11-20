<?php include_once ("Vistas/cabecera.php"); ?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" style="margin-left: 60px;">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Actualizar</strong> Habitaciones -> <strong><?= $habitacion->numero ?></strong>
                        </div>
                        <form action="" method="post" class="">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Estado</label>
                                <select name="habitaciones[estado]" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    <option value="Activo" <?= ($habitacion->estado=="Activo")? 'selected="selected"' : ''?>>Activo</option>
                                    <option value = "Inactivo" <?= ($habitacion->estado=="Inactivo")? 'selected="selected"' : ''?>>Inactivo</option>
                                </select>
                            </div>
                            <div class="card-footer">
                                 <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Editar
                                </button>
                            </div>
                        </form>

 <?php require_once("Vistas/footer.php"); ?>