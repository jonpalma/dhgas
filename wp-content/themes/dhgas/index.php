<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div class="container">
            <h1>
                <?php echo CFS()-> get('banner_title'); ?>
            </h1>
            <div class="bottom-bar">
                <div class="col-xs-4 ">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/magna-bg.png" alt="">
                    <p>
                        <?php echo CFS()-> get('magna_price'); ?>
                    </p>
                    <h3>
                        MAGNA
                    </h3>
                </div>
                <div class="col-xs-4">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/premium-bg.png" alt="">
                    <p>
                        <?php echo CFS()-> get('premium_price'); ?>
                    </p>
                    <h3>
                        PREMIUM
                    </h3>
                </div>
                <div class="col-xs-4">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/diesel-bg.png" alt="">
                    <p>
                        <?php echo CFS()-> get('diesel_price'); ?>
                    </p>
                    <h3>
                        DIESEL
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOTICIAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="noticias" id="noticias">
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('noticias_title'); ?>
            </h1>
            <div id="carousel-noticias" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    if (have_posts())
                    {
                        the_post();
                    }
                    ?>									  
                    <?php
                    query_posts('showposts=9');
                    if (have_posts())
                    {
                        while (have_posts())
                        { 
                            the_post();
                            if($counter == 0)
                            {
                                echo '<div class="item active">';
                            }
                            else if($counter%3 == 0)
                            {
                                echo '</div>';
                                echo '<div class="item">';
                            }
                    ?>
                    <div class="col-sm-4">
                        <div class="img-container">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                            <a href="<?php echo the_permalink();?>"></a>
                        </div>
                        <h3>
                            <?php echo get_the_title(); ?>
                        </h3>
                        <p>
                            <?php echo get_the_date('d-m-Y'); ?>
                        </p>
                    </div>
                    <?php
                            $counter++;
                        }
                        echo '</div>';
                    }
                    wp_reset_query();
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-noticias" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-noticias" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SERVICIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="servicios" id="servicios">
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('servicios_title'); ?>
            </h1>
            <p>
                <?php echo CFS()-> get('servicios_text'); ?>
            </p>
            <div class="imagenes">
                <div class="top-row">
                    <div class="col-sm-3 hidden-xs">
                    </div>
                    <div class="col-sm-6">
                        <div class="middle">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/1.png" alt="">
                            <h3>INTERNET</h3>
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs">
                    </div>
                </div>
                <div class="middle-row">
                    <div class="col-sm-1 hidden-xs left-side"></div>
                    <div class="col-sm-2 col-xs-6 left-side">
                        <div class="top">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/2.png" alt="">
                            <h3>TIENDAS OXXO</h3>
                        </div>
                        <div class="middle">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/4.png" alt="">
                            <h3>BÁSCULA PÚBLICA</h3>
                        </div>
                        <div class="bottom">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/6.png" alt="">
                            <h3>PARADOR CON ILUMINACIÓN</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/central.png" alt="">
                    </div>
                    <div class="col-sm-2 col-xs-6 right-side">
                        <div class="top">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/3.png" alt="">
                            <h3>RESTAURANTE</h3>
                        </div>
                        <div class="middle">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/5.png" alt="">
                            <h3>REGADERAS</h3>
                        </div>
                        <div class="bottom">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/7.png" alt="">
                            <h3>DESPONCHADO</h3>
                        </div>
                    </div>
                    <div class="col-sm-1 hidden-xs left-side"></div>
                </div>
                <div class="bottom-row">
                    <div class="col-sm-3 hidden-xs">
                    </div>
                    <div class="col-sm-6">
                        <div class="middle">
                            <h3>SERVICIO DE HOTEL</h3>
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/servicios/8.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PAGO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="pago parallax-container" id="pago">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/nosotros/bg.jpg" alt="Parallax">
        </div>
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('formas_pago_title'); ?>
            </h1>
            <div id="carousel-pago" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arrayPagoLogos = CFS()->get('formas_pago_logos_array');
                    $arrayEnd = end($arrayPagoLogos);
                    $counter = 0;
                    foreach($arrayPagoLogos as $logo)
                    {
                    ?>
                    <?php
                        if($counter == 0)
                        {
                            echo '<div class="item active">';
                            echo '<div class="row no-margin">';
                        }
                        else if($counter%4 == 0)
                        {
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="item">';
                            echo '<div class="row no-margin">';
                        }
                    ?>
                    <div class="col-sm-3">
                        <img src="<?php echo $logo['pago_logo']; ?>" alt="" class="img-responsive center-block">
                    </div>
                    <?php
                        $counter++;
                    }
                    echo '</div>';
                    echo '</div>';
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-pago" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-pago" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros" id="nosotros">
        <div class="container spacing">
            <div class="col-sm-7">
                <h1>
                    <?php echo CFS()-> get('nosotros_title'); ?>
                </h1>
                <p>
                    <span>Misión:</span><br/>
                    <?php echo CFS()-> get('mision_text'); ?>
                    <br/>
                    <br/>
                    <span>Visión:</span><br/>
                    <?php echo CFS()-> get('vision_text'); ?>
                </p>
            </div>               
            <div class="col-sm-5 hidden-xs">
                <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/bomba.png" alt="">
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LINEA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="linea parallax-container" id="linea">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/nosotros/bg.jpg" alt="Parallax">
        </div>
        <div class="container spacing">
            <div class="top">
                <div class="col-sm-4 hidden-xs">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/nosotros/logo1.png" alt="">
                </div>
                <div class="col-sm-8 tab-content">
                    <?php
                    $arrayLinea = CFS()->get('linea_tiempo_array');
                    $arrayEnd = end($arrayLinea);
                    $counter = 0;
                    foreach($arrayLinea as $dato)
                    {
                        if($counter < 4)
                        {
                    ?>
                    <?php
                            if($counter == 0)
                            {
                                echo '<div role="tabpanel" class="tab-panel fade in active" id="year'.$counter.'">';
                            }
                            else
                            {
                                echo '<div role="tabpanel" class="tab-panel fade" id="year'.$counter.'">';
                            }
                    ?>
                    <h3>
                        <?php echo $dato['year']; ?>
                    </h3>
                    <p>
                        <?php echo $dato['year_text']; ?>
                    </p>
                    <?php
                            echo '</div>';
                        }
                        $counter++;
                    }
                    ?>
                </div>
            </div>
            <div class="bottom">
                <?php
                $arrayLinea = CFS()->get('linea_tiempo_array');
                $arrayEnd = end($arrayLinea);
                $counter = 0;
                foreach($arrayLinea as $dato)
                {
                    if($counter < 4)
                    {
                ?>
                <div class="col-xs-3">
                    <h3>
                        <?php echo $dato['year']; ?>
                    </h3>
                    <div class="line"></div>
                    <?php
                        if($counter == 0)
                        {
                            echo '<a class="active" href="#year'.$counter.'" aria-controls="year'.$counter.'" role="tab" data-toggle="tab"></a>';
                        }
                        else
                        {
                            echo '<a class="" href="#year'.$counter.'" aria-controls="year'.$counter.'" role="tab" data-toggle="tab"></a>';
                        }
                    ?>
                </div>
                <?php
                    }
                    $counter++;
                }
                ?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* ESTACIONES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="estaciones" id="estaciones">
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('estaciones_title'); ?>
            </h1>
            <p>
                <?php echo CFS()-> get('estaciones_text'); ?>
            </p>
            <div class="contenido">
                <?php
                $arrayEstaciones = CFS()->get('estaciones_array');
                $arrayEnd = end($arrayEstaciones);
                $counter = 0;
                foreach($arrayEstaciones as $estacion)
                {
                ?>
                <div class="col-sm-6 map-column">
                    <div class="img-container">
                        <div class="googleMap" id="googleMap_<?php echo $estacion['estacion_id']; ?>" data-position="<?php echo $estacion['estacion_id']; ?>" data-lat="<?php echo $estacion['estacion_lat']; ?>" data-long="<?php echo $estacion['estacion_long']; ?>" data-title="<?php echo $estacion['estacion_name']; ?>"></div>
                        <img class="img-inner" src="<?php echo $estacion['estacion_img']; ?>" alt="">
                        <a class="pin"></a>
                        <a class="cerrar"></a>
                    </div>
                    <h2>
                        <?php echo $estacion['estacion_name']; ?>
                    </h2>
                    <p class="ubicacion">
                        <?php echo $estacion['estacion_address']; ?>
                    </p>
                    <p class="telefono">
                        <?php echo $estacion['estacion_phone']; ?>
                    </p>
                    <p class="email">
                        e-mail:
                        <a href="mailto:<?php echo $estacion['estacion_email']; ?>">
                            <?php echo $estacion['estacion_email']; ?>
                        </a>
                    </p>
                    <p class="map">
                        <a>
                            Ubicación fiscal
                        </a>
                    </p>
                </div>
                <?php
                    $counter++;
                }
                ?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto parallax-container" id="contacto">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/nosotros/bg.jpg" alt="Parallax">
        </div>
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('contacto_title'); ?>
            </h1>
            <div class="contenido">
                <div class="col-sm-2 hidden-xs"></div>
                <div class="col-sm-3 col-xs-5">
                    <div class="img-container top">
                        <a class="smoothScroll" href="#index">
                            <img src="<?php echo CFS()-> get('contacto_logo'); ?>" alt="">
                        </a>
                    </div>
                    <div class="middle">
                        <p>
                            <?php echo CFS()-> get('contacto_text'); ?>
                        </p>
                    </div>
                    <div class="bottom">
                        <a href="<?php echo CFS()-> get('contacto_link_fb'); ?>">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/social/fb.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-7 col-xs-7">
                    <div class="form-container">
                        <form action="" method="POST" id="contact-form">
                            <?php echo do_shortcode('[contact-form-7 id="4" title="Formulario Index Contacto"]'); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>