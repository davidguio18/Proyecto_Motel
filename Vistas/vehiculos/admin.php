<?php
if ($_SESSION["Perfil"] == "Administrador"){
    include_once ("Vistas/cabecera.php");
}else if ($_SESSION["Perfil"] == "Vendedor"){
    include_once ("Vistas/cabeceraVendedor.php");
}
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
                                        <form method="post" action="index.php?c=habitaciones&a=view" autocomplete="off">
                                            <input name="hbt" type="text" placeholder="Buscar aquí..." autofocus >
                                            <button type="submit">Buscar</button>
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
                                                <th colspan="2">Acci&oacute;n</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($vehiculos as $vehiculo){ ?>
                                            
                                            <tr class="tr-shadow">
                                               <tr>
			                               		<th><?= $vehiculo->id_cliente; ?></th>
				                                <td ><?= $vehiculo->placa; ?></td>
				                                <td><?= $vehiculo->marca; ?></td>
				                                <td ><?= $vehiculo->servicio; ?></td>
				                                <td class="desc"><?= $vehiculo->registro; ?></td>
				                                
				                                <td> <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"><a href="index.php?c=vehiculos&a=update&id=<?= $vehiculo->id_cliente; ?>" style="color:#f6f7f9;" >Editar</a></i> 
                                                </button> </td>
				                                <td> <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"><a href="index.php?c=vehiculos&a=delete&id=<?= $vehiculo->id_cliente; ?>" style="color:#f6f7f9;" ></i> Eliminar
                                                </button>  </td>
				
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
 <?php include_once ("Vistas/footer.php");  ?>