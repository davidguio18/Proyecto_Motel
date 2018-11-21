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
                                <h3 class="title-5 m-b-35">Lista Total de Productos</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                    </div>
                                    
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                   
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Marca</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Estado</th>
                                                <th></th>
                                             
                                            </tr>
                                        </thead>
                                       <?php  foreach ( $productos as $producto) {?>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                 <td><?=$producto->id_producto; ?> 
                                                </td>
                                                <td><?=$producto->nombre; ?></td>
                                                <td>
                                                    <span class="block-email"> <?=$producto->marca; ?></span>
                                                </td>
                                                <td class="desc"><?=$producto->cantidad; ?></td>
                                                <td><?=$producto->precio; ?></td>
                                                <td>
                                                    <span class="status--process"><?=$producto->estado; ?></span>
                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                         
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"><a href="index.php?c=producto&a=update&id=<?=$producto->id_producto;?>">Editar</a></i> 
                                                </button>
                                                          
                                                </td>
                                                <td>
                                                       <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"><a href="index.php?c=producto&a=delete&id=<?=$producto->id_producto;?>" style="color:#f6f7f9;" ></i> Eliminar
                                                </button>
                                                                                                          
                                                        
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
