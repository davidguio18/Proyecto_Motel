<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        </tr>
        <?php foreach($alq as $alquiler){ ?>
            <tr>
                <th><?= $alquiler->id_alquiler; ?></th>
                <td><?= $usuario->Nombres; ?></td>
                <td><?= $usuario->Apellidos; ?></td>
                <td><?= $usuario->Documento; ?></td>
                <td><?= $usuario->Estado; ?></td>
                <td> <a href="index.php?c=alquiler&a=update&id=<?= $alquiler->id_alquiler; ?>">Editar</a> </td>
                <td> <a href="index.php?c=alquiler&a=delete&id=<?= $alquiler->id_alquiler; ?>">Eliminar</a> </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>