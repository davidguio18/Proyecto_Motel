<?php
if ($_SESSION["Perfil"] == "Administrador"){
    include_once ("Vistas/cabecera.php");
}else if ($_SESSION["Perfil"] == "Vendedor"){
    include_once ("Vistas/cabeceraVendedor.php");
}
?>

<script type="js/jquery-3.3.1.min.js"></script>
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Registrar </strong> Servicio
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="" >
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Producto</label>
                                                <select required="" name="Servicios[producto]" id="precioProducto" onchange="getPrecioProducto()" class="form-control">
                                                   <option>Selecciona</option>
                                                    <?php 
                                                        require_once("Modelos/Productos.php");
                                                        $prod = new Productos();
                                                        $productos = $prod->listar();
                                                     ?>
                                                    <?php foreach ( $productos as $producto) {?>
                                                    <option value="<?=$producto->id_producto; ?>"><?=$producto->nombre; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="text" id="oculto"  onchange="multiplicar();" style="display:none">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Cantidad</label>
                                                <input type="text" id="cant" name="Servicios[cantidad]" placeholder="Ingrese Cantidad.." class="form-control" required="" onchange="multiplicar();" autocomplete="off">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Precio</label>
                                                <input readonly="" type="text" id="prec"  name="Servicios[precio]" placeholder="Precio.." class="form-control" required="">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Solicitud</label>
                                                <input readonly="" type="text" id="nf-email" name="Servicios[solicitud]" value="<?php echo date ('  Y/m/d  h:i:s');?>" placeholder="Ingrese Solicitud.." class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label">Alquiler</label>
                                                <select required name="Servicios[alquiler]" class="form-control" >
                                                    <option value="">Selecciona</option>
                                                    <?php foreach ($codAlq as $codigoAlquiler) { ?>
                                                        <option value="<?= $codigoAlquiler->id_alquiler ?>"> <?= $codigoAlquiler->id_alquiler ?></option>
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
                                     
                                    
                                        <script type="text/javascript">
                                            function getPrecioProducto(){
                                                var idProducto = $("#precioProducto").val();
                                                $.ajax({
                                                    method: "POST",
                                                    url:"index.php?c=producto&a=getPrecio",
                                                    data: {id:idProducto}
                                                }).done(function(msg){
                                                    $("#oculto").val(msg);
                                                });

                                            }
                                        </script>
                                         <script type="text/javascript">
                                            function multiplicar(){
                                            m1 = $("#oculto").val();
                                            m2 =  $("#cant").val();
                                            r = $("#prec").val(m1*m2) ;
}
                                        </script>
                                       
                                         
                                        </form>
                                    </div>
                                    
                                </div>
                               
                                
                                </div>
                            </div>

                            </div>
                        </div>
 <?php require_once("Vistas/footer.php"); ?>