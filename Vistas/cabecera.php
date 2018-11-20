<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>principal</title>
    

    <!-- Fontfaces CSS-->
    <link href="Vistas/resources/css/font-face.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="Vistas/resources/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="Vistas/resources/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Vistas/resources/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="Vistas/resources/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="fonts.css">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <p>El Cristal Admin</p>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php?c=home&a=homeAdmin">
                                <i class="fas fa-tachometer-alt"></i>Principal
                            </a>
                        </li>
                          <li>
                            <a href="index.php?c=vehiculos&a=create">
                                <i  class="fa fa-car"></i>Registrar Vehículo</a>
                        </li>
                         <li>
                            <a href="index.php?c=alquiler&a=create">
                                <i  class="fa fa-calculator"></i>Registrar Alquiler</a>
                        </li>
                        <li>
                            <a href="index.php?c=servicios&a=create">
                                <i class="fa fa-clock-o"></i>Registrar Servicio</a>
                        </li>
                        <li>
                            <a href=index.php?c=producto&a=create>
                                <i class="fa fa-truck" ></i>Registrar Producto</a>
                        </li>
                          <li>
                            <a href="index.php?c=usuarios&a=create">
                                <i class="fas fa-chart-bar"></i>Registrar Usuario de Sistema</a>
                        </li>



                        <li>
                            <a href="index.php?c=habitaciones&a=create"">
                                <i class="fa fa-hospital-o"></i>Registrar Habitaci&oacute;n</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Administrar</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.php?c=alquiler&a=admin">Alquileres</a>
                                </li>
                                <li>
                                    <a href="index.php?c=servicios&a=admin">Servicios</a>
                                </li>
                                <li>
                                    <a href="index.php?c=producto&a=admin">Productos</a>
                                </li>
                                <li>
                                    <a href="index.php?c=habitaciones&a=admin">Habitaciones</a>
                                </li>
                                <li>
                                    <a href="index.php?c=vehiculos&a=admin">Veh&iacute;culos</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                       
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?=  $_SESSION["Usuario"]->nombres ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            
                                          
                                            <div class="account-dropdown__footer">
                                                <a href="index.php?c=home&a=logout">
                                                    <i class="zmdi zmdi-power"> Cerrar Sesi&oacute;n</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>