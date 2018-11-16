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
                                                <th>Precio</th>
                                                <th>Solicitud</th>
                                                <th>Alquiler</th>
                                                <th>Cantidad</th>
                                         
                                         </tr>
                                        </thead>
                                        <?php foreach($servicios as $servicio){ ?>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                               <?= $servicio->id_servicio; ?>
                                                </td>
                                                <td><?= $servicio->producto; ?></td>
                                                <td>
                                                    <span class="block-email"> <?= $servicio->precio; ?> </span>
                                                </td>
                                                <td class="desc"><?= $servicio->solicitud; ?></td>
                                                <td><?= $servicio->alquiler; ?></td>
                                                <td>
                                                    <span class="status--process"><?= $servicio->cantidad; ?></span>
                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                       <td> 
                                                         <a href="index.php?c=servicios&a=update&id=<?= $servicio->id_servicio; ?>">Editar</a>
                                                        </td>

                                                        <td>
                                                            
                                                            <a href="index.php?c=servicios&a=delete&id=<?= $servicio->id_servicio; ?>">Eliminar</a> 
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