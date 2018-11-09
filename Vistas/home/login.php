<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Inicio Sesion |<?= $_SESSION["Usuario"]->Nombres; ?></title>
</head>
<body>
    <h1>Iniciar Sesion</h1>
    <?php include("Vistas/header.php"); ?>
    <?php
        if(isset($_GET["error"])){
            echo "<h3>Datos incorrectos.</h3>";
        }
    ?>
    <form action="" method="POST" name="formLogin">
        <label>Documento No:</label>
        <input name="Login[documento]" type="text"/><br><br>
        <label>Contrase&ntilde;a</label>
        <input name="Login[contrasenia]" type="password"/><br><br>
        <br/>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>