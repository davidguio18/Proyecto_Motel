<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-qVp3sGZJcZdk20BIG6O0Sb0sYRyedif3+Z8bZtQueBW/g7Dp67a0XdiMmmWCCm82" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php include_once("Vistas/cabecera.php"); ?>
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">Listado General De Alquiler</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <form method="post" action="index.php?c=habitaciones&a=view" autocomplete="off">
                                    <input name="hbt" type="text" placeholder="Buscar aquí..." autofocus >
                                    <button type="submit">Buscar</button>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table-data2">
                                <thead>
                                    <tr>
                                        <th>Cod Alquiler</th>
                                        <th>Num Habitaci&oacute;n</th>
                                        <th>Tipo de Habitaci&oacute;n</th>
                                        <th>No Placa Cliente</th>
                                        <th>Valor Hora</th>
                                        <th>Hora Ingreso</th>
                                        <th>Hora Salida</th>
                                        <th>Nombre Vendedor</th>
                                        <th>Apellido Vendedor</th>
                                        <th colspan="2">Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <?php foreach($alquileres as $alquiler){ ?>
                                <tbody>
                                    <tr class="tr-shadow">
                                        <td><?= $alquiler->id_alquiler; ?></td>
                                        <td><?= $alquiler->Habitacion->numero; ?></td>
                                        <td><?= $alquiler->Habitacion->tipo; ?></td>
                                        <td><?= $alquiler->Cliente->placa; ?></td>
                                        <td><?= $alquiler->Habitacion->valor_noche; ?></td>
                                        <td><?= $alquiler->ingreso; ?></td>
                                        <td><?= $alquiler->salida; ?></td>
                                        <td><?= $alquiler->Vendedor->nombres; ?></td>
                                        <td><?= $alquiler->Vendedor->apellidos; ?></td>
                                        <td> <a href="index.php?c=alquiler&a=update&id=<?= $alquiler->id_alquiler; ?>">
                                                <button type="button" class="btn btn-success" style="margin-right: 10px;">Editar</button>
                                            </a>
                                        </td>
                                        <td> <a href="javascript: eliminar(<?= $alquiler->id_alquiler; ?>)">
                                                <button type="button" class="btn btn-danger">Eliminar</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <script type="text/javascript">
                                    function eliminar(id){
                                        swal({
                                            title: "Esta Seguro?",
                                            text: "Este Alquiler Se Eliminara y Nose Podra Recuperar!",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                        }).then((willDelete) => {
                                            if (willDelete) {
                                                swal("Poof!", "Eliminacion Exitosa!", "success");
                                                setTimeout(function(){
                                                    location.href="index.php?c=alquiler&a=delete&id="+id;
                                                },2000);
                                            }
                                        });
                                    }
                                </script>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
<?php include_once ("Vistas/footer.php"); ?>