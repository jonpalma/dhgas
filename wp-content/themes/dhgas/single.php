<?php $page = 'detalle-noticia'; ?>
<?php include('header.php'); ?>
<div class="wrapper detalle-noticia" id="detalle-noticia">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div class="bg-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/single/banner/bg.jpg" alt="">
        </div>
        <div class="container">
            <h1>
                NOTICIAS
            </h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOTICIA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="noticia" id="noticia">
        <div class="container light-spacing">
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
            <div class="col-xs-8 left-side">
                <div class="img-container">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                </div>
                <p class="date">
                    <?php echo get_the_date('d-m-Y'); ?>
                </p>
                <p class="text">
                    <?php
                    if(have_posts())
                    {
                        while(have_posts())
                        {
                            the_post();
                    ?>

                    <?php echo get_the_content(); ?>

                    <?php
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="col-xs-4 right-side">
                <h2>
                    RECIENTE
                </h2>
                <div class="row no-margin">
                    <?php
                    $counter = 0;
                    query_posts('cat='.$categoryID.'&orderby=rand');
                    while (have_posts()) : the_post();
                    if($the_post_name != get_the_title() && $counter != 3) {
                    ?>
                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="relacionada">
                            <div class="col-xs-5 hidden-xs">
                                <div class="img-container">
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <h3>
                                    <?php
                        if (strlen($post->post_title) > 20)
                        { 
                            echo substr(the_title($before = '', $after = '', FALSE), 0, 20) . ' [...]'; 
                        }
                        else
                        {
                            the_title();
                        }
                                    ?>
                                </h3>
                            </div>
                        </div>
                    </a>
                    <?php
                        $counter++;
                    }

                    endwhile;
                    ?>
                </div>
            </div>
            <div class="col-xs-8 bottom">
                <nav id="post-entries">
                    <div class="row no-margin">
                        <div class="nav-prev fl col-xs-6"><?php previous_post_link( '%link', '<p class="left-side">ANTERIOR</p>' ); ?></div>
                        <div class="nav-next fr col-xs-6 text-right"><?php next_post_link( '%link', '<p class="right-side">SIGUIENTE</p>' ); ?></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('contacto.php'); ?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>