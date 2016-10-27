<?php $page = 'contacto'; ?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--/* CONTACTO */-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="contacto parallax-container" id="contacto">
    <div class="parallax">
        <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/nosotros/bg.jpg" alt="Parallax">
    </div>
    <div class="container light-spacing">
        <h1>
            CONTACTO
        </h1>
        <div class="contenido">
            <div class="col-sm-2 hidden-xs"></div>
            <div class="col-sm-3 col-xs-5">
                <div class="img-container top">
                    <a class="smoothScroll" href="<?php if($page != 'index') { echo 'index'; }?>#index">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/icons/logo.png" alt="">
                    </a>
                </div>
                <div class="middle">
                    <p>
                        Envíanos tus sugerencias y mantente en contacto con nosotros.
                    </p>
                </div>
                <div class="bottom">
                    <a target="_blank" href="https://www.facebook.com/">
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