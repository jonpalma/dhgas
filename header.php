<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="img/favicon.ico"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>DH Gas</title>
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
                    <a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll nav-logo">
                        <img src="img/index/icons/logo.png" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll vertical-align nav-padd">INICIO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#nosotros" class="smoothScroll vertical-align nav-padd">NOSOTROS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#servicios" class="smoothScroll vertical-align nav-padd">SERVICIOS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#pago" class="smoothScroll vertical-align nav-padd">FORMAS DE PAGO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#estaciones" class="smoothScroll vertical-align nav-padd">ESTACIONES</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#contacto" class="smoothScroll vertical-align nav-padd">CONTACTO</a></li>
                        <li class="nav-factura"><a href="<?php if($page != 'index') { echo 'index.php'; }?>#" class="smoothScroll vertical-align nav-padd">FACTURA EN LÍNEA</a></li>
                    </ul>
                </div>
            </div>
        </nav>