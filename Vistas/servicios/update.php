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
                                        <strong> Actualizar </strong> Servicio
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Producto</label>
                                                <input type="text" id="nf-email"  name="Servicios[producto]" value="<?= $servicio->producto ?>"  class="form-control" >
                                                
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Precio</label>
                                                <input type="text" id="nf-email" name="Servicios[precio]"  class="form-control" value="<?= $servicio->precio ?>">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Solicitud</label>
                                                <input type="text" id="nf-email" name="Servicios[solicitud]" readonly value="<?= $servicio->solicitud ?>" " class="form-control" >
                                            </div>

                                                <input type="text" id="nf-email" name="Servicios[alquiler]" value="<?= $servicio->alquiler ?>" class="form-control" >
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label">Alquiler</label>
                                                <select required name="Servicios[alquiler]" class="form-control" >
                                                    <option value="<?= $servicio->id_alquiler ?>"><?= $servicio->alquiler ?></option>
                                                    <?php foreach ($codAlq as $codigoAlquiler) { ?>
                                                        <option value="<?= $codigoAlquiler->id_alquiler ?>"> <?= $codigoAlquiler->id_alquiler ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Cantidad</label>
                                                <input type="number" id="nf-email" name="Servicios[cantidad]" value="<?= $servicio->cantidad ?>"  class="form-control">
                                            </div>
                                             <div class="card-footer">
                                                 <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Editar
                                                </button>
                                               
                                    </div>
                                         
                                        </form>
                                    </div>
                                    
                                </div>
                               
                                
                                </div>
                            </div>

                            </div>
                        </div>
 <?php require_once("Vistas/footer.php"); ?>