<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pagina de Conferencia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">



        <?php

        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php","",$archivo);
        if($pagina == 'invitados' || $pagina=='index'){
            echo '<link rel="stylesheet" href="css/colorbox.css">';
        }else if($pagina == 'conferencia'){
            echo '<link rel="stylesheet" href="css/lightbox.css">';
        }

        ?>


        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="<? echo $pagina; ?>">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <header class="side-header">
            <div class="hero">
                <div class="contenido-header">
                    <nav class="redes-sociales">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </nav>
                    <div class="informacion-evento">
                        <!--Clearfix lo uso para limpiar los floats-->
                        <div class="clearfix">
                            <p class="fecha"><i class="far fa-calendar-alt"></i> 10-12 Marzo</p>
                            <p class="ciudad"><i class="fas fa-globe"></i> Lima,PE</p>
                        </div>
                        <h1 class="nombre-sitio">GdlWebCamp</h1>
                        <p class="slogan">la mejor conferencia <span>diseño web</span></p>
                    </div>

                </div>
           </div><!--clase hero-->
        </header>

        <div class="barra-principal">
            <div class="contenedor clearfix">
                <div class="logo">
                    <img src="img/logo.svg" alt="logotipo">
                </div>

                <div class="navegacion-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>


                <nav class="navegacion-barra clearfix">
                    <a href="conferencia.php">Conferencias</a>
                    <a href="calendario.php">Calendario</a>
                    <a href="invitados.php">Invitados</a>
                    <a href="Registro.php">Reservaciones</a>
                </nav>

            </div><!--contenedor de la barra-->
        </div><!--la barra-->
