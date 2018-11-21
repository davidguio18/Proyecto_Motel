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
                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-header">
                                        <strong> Actualizar </strong> Producto &nbsp <?= $producto->nombre ?>


                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nombre</label>
                                                <input type="text" id="nf-email" name= "Productos[nombre]" placeholder="Ingrese Nombre de Producto.." class="form-control" required value="<?= $producto->nombre?>">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Marca</label>
                                                <input type="text" id="nf-email" name="Productos[marca]" placeholder="Ingrese Marca de Producto.." class="form-control" required value="<?= $producto->marca?>">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Cantidad</label>
                                                <input type="number" id="nf-email" name="Productos[cantidad]" placeholder="Ingrese Cantidad de Producto.." class="form-control" required value="<?= $producto->cantidad?>">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Precio</label>
                                                <input type="number" id="nf-email" name="Productos[precio]" placeholder="Ingrese Precio de Producto.." class="form-control" required value="<?= $producto->precio?>">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Precio</label>
                                                <input type="number" id="nf-email" name="Productos[precio]" placeholder="Ingrese Precio de Producto.." class="form-control" required value="<?= $producto->precio?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Estado</label>
                                               <select  name="Productos[estado]">
                                                    <option value="Activo" <?= ($producto->estado=="Activo")? 'selected="selected"':''?>>Activo</option>
                                                    <option value="Inactivo" <?= ($producto->estado=="Inactivo")? 'selected="selected"':''?>>Inactivo</option>
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
                                    </div>
                                    
                                </div>
                               
                                
                                </div>
                            </div>

                            </div>
                        </div>
 <?php require_once("Vistas/footer.php"); ?>
