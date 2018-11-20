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
                                <h3 class="title-5 m-b-35">Listado de Habitaciones</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">

                                        <form method="post" action="index.php?c=habitaciones&a=view" autocomplete="off"> 
                                         <input name="hbt" type="text" placeholder="Buscar aquí..." autofocus >
                                      <button type="submit">buscar</button>
                                        
                                    </div>
                                    
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>N&uacute;mero</th>
                                                <th>Tipo</th>
                                                <th>Valor Noche</th>
                                                <th>Estado</th>
                                                <th colspan="2" style="text-align: center">Acci&oacute;n</th>
                                            </tr>
                                        </thead>
                                        <?php foreach($habitacion as $habitacion) { ?>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                <?= $habitacion->id_habitacion; ?> 
                                                </td>
                                                <td><?= $habitacion->numero; ?></td>
                                                <td>
                                                    <span class="block-email"> <?= $habitacion->tipo; ?></span>
                                                </td>
                                                <td class="desc"><?= $habitacion->valor_noche; ?></td>
                                                <td>
                                                    <span class="status--process"><?= $habitacion->estado; ?></span>
                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"><a href="index.php?c=habitaciones&a=update&id=<?= $habitacion->id_habitacion; ?>" style="color:#f6f7f9;" >Editar</i> 
                                                </button> 
                                                </td>   
                                                <td>
                                                         <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"><a href="index.php?c=habitaciones&a=delete&id=<?= $habitacion->id_habitacion; ?>" style="color:#f6f7f9;" ></i> Eliminar
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