<!DOCTYPE html>
<html>
<head>
	<title>Listado general de productos</title>

</head>
<body>
	

	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Marca</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Precio</th>
				<th scope="col">estado</th>
				<th scope="col">Acciones</th>
				<th scope="col">Acciones</th>
				
			</tr>
			<?php
			foreach ( $productos as $producto) {?>
				
			<tr>
				<th scope="row"><?=$producto->id_producto; ?></th>
				<td><?=$producto->nombre; ?></td>
				<td><?=$producto->marca; ?></td>
				<td><?=$producto->cantidad; ?></td>
				<td><?=$producto->precio; ?></td>
				<td><?=$producto->estado; ?></td>
				<td><a href="index.php?c=producto&a=update&id=<?=$producto->id_producto;?>">Editar</a></td>
				<td><a href="index.php?c=producto&a=delete&id=<?=$producto->id_producto;?>">Eliminar</a></td>
				

			</tr>	
			<?php } ?>

		</tbody>
		


	</table>

</body>
</html>
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
                                        <!--<?php foreach ( $productos as $producto) {?>-->
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                               <!--  <?=$producto->id_producto; ?> -->
                                                </td>
                                                <td><!--<?=$producto->nombre; ?>--></td>
                                                <td>
                                                    <span class="block-email"> <!--<?=$producto->marca; ?>--></span>
                                                </td>
                                                <td class="desc"><!--<?=$producto->cantidad; ?>--></td>
                                                <td><!--<?=$producto->precio; ?>--></td>
                                                <td>
                                                    <span class="status--process"><!--<?=$producto->estado; ?>--></span>
                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                         <a href="index.php?c=producto&a=update&id=<?=$producto->id_producto;?>"></a>
                                                          
                                                </td>
                                                <td>
                                                        <a href="index.php?c=producto&a=delete&id=<?=$producto->id_producto;?>">Eliminar</a>
                                                                                                          
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            		<!--<?php } ?>-->
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
