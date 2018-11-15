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
                                <h3 class="title-5 m-b-35">Listado de Vehículos</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                    </div>
                                    
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                   
                                                <th>Id</th>
                                                <th>Placa</th>
                                                <th>Marca</th>
                                                <th>Servicio</th>
                                                <th>Registro</th>
                                                <th colspan="2">Acciones</th>
                                                
                                             
                                            </tr>
                                        </thead>
                                      <?php foreach($vehiculos as $vehiculo){ ?>
                                        <tbody>
                                            <tr class="tr-shadow">
                                               <tr>
			                               		<th><?= $vehiculo->id_cliente; ?></th>
				                                <td><?= $vehiculo->placa; ?></td>
				                                <td><?= $vehiculo->marca; ?></td>
				                                <td><?= $vehiculo->servicio; ?></td>
				                                <td><?= $vehiculo->registro; ?></td>
				
				                                <td> <a href="index.php?c=vehiculos&a=update&id=<?= $vehiculo->id_cliente; ?>">Editar</a> </td>
				                                <td> <a href="index.php?c=vehiculos&a=delete&id=<?= $vehiculo->id_cliente; ?>">Eliminar</a> </td>
				
			                                     </tr>
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