<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-qVp3sGZJcZdk20BIG6O0Sb0sYRyedif3+Z8bZtQueBW/g7Dp67a0XdiMmmWCCm82" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Lista Alquiler</title>
</head>
<body>
    <h1>Listado General De Alquiler</h1>
    <table border="2">
        <tr>
            <th>Cod Alquiler</th>
            <th>Numero Habitaci&oacute;n</th>
            <th>Tipo de Habitaci&oacute;n</th>
            <th>No Placa Cliente</th>
            <th>Valor Hora</th>
            <th>Hora Ingreso</th>
            <th>Hora Salida</th>
            <th>Nombre Vendedor</th>
            <th>Apellido Vendedor</th>
            <th colspan="2">Acci&oacute;n</th>
        </tr>
        <?php foreach($alquileres as $alquiler){ ?>
            <tr>
                <td><?= $alquiler->id_alquiler; ?></td>
                <td><?= $alquiler->Habitacion->numero; ?></td>
                <td><?= $alquiler->Habitacion->tipo; ?></td>
                <td><?= $alquiler->Cliente->placa; ?></td>
                <td><?= $alquiler->Habitacion->valor_noche; ?></td>
                <td><?= $alquiler->ingreso; ?></td>
                <td><?= $alquiler->salida; ?></td>
                <td><?= $alquiler->Vendedor->nombres; ?></td>
                <td><?= $alquiler->Vendedor->apellidos; ?></td>
                <td> <a href="index.php?c=alquiler&a=update&id=<?= $alquiler->id_alquiler; ?>">Editar</a> </td>

                <td> <a href="javascript: eliminar(<?= $alquiler->id_alquiler; ?>)">
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
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
</body>
</html>