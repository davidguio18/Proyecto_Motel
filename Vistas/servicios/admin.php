<?php 
	
	include_once("Vistas/cabecera.php");

 ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Listado de Servicios</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                    </div>
                                    
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                   
                                               <th>Id</th>
                                                <th>Producto</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Alquiler</th>
                                                <th>Solicitud</th>
                                         
                                         </tr>
                                        </thead>
                                        <?php foreach($servicios as $servicio){ ?>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                  <?= $servicio->id_servicio; ?>
                                                </td>
                                                <td><?= $servicio->Producto->nombre; ?></td>
                                                <td class="desc"> <?= $servicio->cantidad; ?> </td>
                                                <td >
                                                    <span class="status--process"><?= $servicio->precio; ?></span>
                                                </td>
                                                <td><?= $servicio->alquiler; ?></td>
                                                <td class="desc"><?= $servicio->solicitud; ?></td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                       <td> 
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                         <i class="fa fa-dot-circle-o"><a href="index.php?c=servicios&a=update&id=<?= $servicio->id_servicio; ?>"style="color:#f6f7f9;">Editar</i> 
                                                </button>
                                                        </td>

                                                        <td>
                                                   <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"><a href="index.php?c=servicios&a=delete&id=<?= $servicio->id_servicio; ?>" style="color:#f6f7f9;" ></i> Eliminar
                                                </button>
                                                        
                                                        </td>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            	<?php } ?>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
 <?php 
 	include_once ("Vistas/footer.php");
  ?>