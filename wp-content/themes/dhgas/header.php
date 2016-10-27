<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Somos un Grupo Gasolinero originario de la región centro sur del estado de Chihuahua, nuestro compromiso es ofrecer servicios y productos autorizados por PEMEX Refinación, los cuales satisfagan y sobrepasen las necesidades de nuestros clientes y amigos.">
        <meta name="keywords" content="gasolinera, gasolina, dhgas, estacion, combustible, pemex, refinacion, oxxo, parador, bascula, publica, hotel, servicio, desponchado, regaderas, restaurante, magna, premium, diesel">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="<?php echo bloginfo('template_url').'/'; ?>img/favicon.ico"/>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <title>DHgas Gasolineras</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll nav-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/logo.png" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll vertical-align nav-padd">INICIO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#noticias" class="smoothScroll vertical-align nav-padd">NOTICIAS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#servicios" class="smoothScroll vertical-align nav-padd">SERVICIOS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#pago" class="smoothScroll vertical-align nav-padd">FORMAS DE PAGO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#nosotros" class="smoothScroll vertical-align nav-padd">NOSOTROS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#estaciones" class="smoothScroll vertical-align nav-padd">ESTACIONES</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#contacto" class="smoothScroll vertical-align nav-padd">CONTACTO</a></li>
                        <li class="nav-factura"><a href="" class="smoothScroll vertical-align nav-padd">FACTURA EN LÍNEA</a></li>
                    </ul>
                </div>
            </div>
        </nav>