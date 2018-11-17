
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	
<h1 align="center">Crear Producto</h1><br><br>

<form action="" method="post">
	<label>Nombre:</label>
	<input type="text" required name="Productos[nombre]" value=""/>
	<label>Marca:</label>
	<input type="text" required name="Productos[marca]" value=""/>
	<label>Cantidad:</label>
	<input type="number" required name="Productos[cantidad]" value=""/>
	<label>Precio:</label>
	<input type="number" required  name="Productos[precio]" value=""/>
	
	<button type="submit" name="submit">Crear Producto</button>

	
</form>

</body>
</html>
<?php include_once ("Proyecto_Motel/Vistas/cabecera.php"); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Ingresar </strong> Producto
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nombre</label>
                                                <input type="text" id="nf-email" name= "Productos[nombre]" placeholder="Ingrese Nombre de Producto.." class="form-control" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Marca</label>
                                                <input type="text" id="nf-email" name="Productos[marca]" placeholder="Ingrese Marca de Producto.." class="form-control" required=">
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Cantidad</label>
                                                <input type="text" id="nf-email" name="Productos[cantidad]" placeholder="Ingrese Cantidad de Producto.." class="form-control" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Precio</label>
                                                <input type="number" id="nf-email" name="Productos[precio]" placeholder="Ingrese Precio de Producto.." class="form-control" required>
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

 <?php require_once("Proyecto_Motel/Vistas/footer.php"); ?>
