<?php include_once ("cabecera.php"); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Registrar </strong> Servicio
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Producto</label>
                                                <select name="Servicios[producto]" required="">
              
                                                   <option>seleccione</option>
                                                    <?php 
                                                        require_once("Modelos/Productos.php");
                                                        $prod = new Productos();
                                                        $productos = $prod->listar();
                                                     ?>

                                                    <?php foreach ( $productos as $producto) {?>
                                                    <option value="<?=$producto->id_producto; ?>"><?=$producto->nombre; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Precio</label>
                                                <input type="text" id="nf-email" name="Servicios[precio]" placeholder="Ingrese Precio.." class="form-control" required=">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Solicitud</label>
                                                <input type="text" id="nf-email" name="Servicios[solicitud]" value="<?php echo date ('  Y/m/d  h:i:s');?>" placeholder="Ingrese Solicitud.." class="form-control" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Alquiler</label>
                                                <input type="number" id="nf-email" name="Servicios[alquiler]" placeholder="Ingrese Alquiler.." class="form-control" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Cantidad</label>
                                                <input type="number" id="nf-email" name="Servicios[cantidad]" placeholder="Ingrese Alquiler.." class="form-control" required>
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
                                    </div>
                                    
                                </div>
                               
                                
                                </div>
                            </div>

                            </div>
                        </div>
 <?php require_once("Vistas/footer.php"); ?>