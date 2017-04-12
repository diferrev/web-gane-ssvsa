<?php 
/* Template name: Página de LAFT */  
get_header();
?>

<?php while( have_posts() ) : the_post(); ?>
<main class="content">
    <article class="post">
        <header class="post__header" style="background-image: url(<?php bloginfo('template_url');?>/assets/img/examples/laft.jpg)">
            <hgroup class="container">
                <h1 class="post__title container">
                    <?php the_title(); ?>
                </h1>
            </hgroup>  
        </header>
        <section class="container post__content">
            <?php the_content(); ?>
        </section>
    </article>
    <section class="news container">
        <h3>Noticias relacionadas</h3>
        <section class="news__inner">
            <article class="new">
                <figure class="new__thumbnail">
                    <a href="">
                        <img src="<?php bloginfo('template_url');?>/assets/img/examples/antilavado.jpg" alt="">
                    </a>
                </figure>
                <h2 class="new__title"><a href="">Nos sumamos a la lucha - Prevención LA/FT</a></h2>
                <span class="new__meta"><i class="fa fa-calendar"></i> 29 de Octubre, 2017</span>
                <p>Este 29 de octubre de 2016 nos sumamos al día nacional de la prevención del lavado de activos.</p>
                <a class="btn btn--blue new__read-more" href="">Leer más</a>
            </article>
            <article class="new">
                <figure class="new__thumbnail">
                    <a href="">
                        <img src="<?php bloginfo('template_url');?>/assets/img/examples/bancos.jpg" alt="">
                    </a>
                </figure>
                <h2 class="new__title"><a href="">Llamado a Bancos Americanos en Conferencia Mundial de Bancos</a></h2>
                <span class="new__meta"><i class="fa fa-calendar"></i> 8 de Marzo, 2017</span>
                <p>Bancos corresponsales van a llevar a la ilegalidad a las empresas de giros y juegos en Colombia. Los sectores de</p>
                <a class="btn btn--blue new__read-more" href="">Leer más</a>
            </article>
            <article class="new">
                <figure class="new__thumbnail">
                    <a href="">
                        <img src="<?php bloginfo('template_url');?>/assets/img/examples/oficiales.jpg" alt="">
                    </a>
                </figure>
                <h2 class="new__title"><a href="">Plenario de Oficiales de Cumplimiento 2017</a></h2>
                <span class="new__meta"><i class="fa fa-calendar"></i> 5 de Marzo, 2017</span>
                <p>El día 28 de febrero de 2017, se llevó a cabo Reunión Plenario de Oficiales de Cumplimiento del Sector de</p>
                <a class="btn btn--blue new__read-more" href="">Leer más</a>
            </article>
            <article class="new">
                <figure class="new__thumbnail">
                    <a href="">
                        <img src="<?php bloginfo('template_url');?>/assets/img/examples/antilavado.jpg" alt="">
                    </a>
                </figure>
                <h2 class="new__title"><a href="">Nos sumamos a la lucha - Prevención LA/FT</a></h2>
                <span class="new__meta"><i class="fa fa-calendar"></i> 29 de Octubre, 2017</span>
                <p>Este 29 de octubre de 2016 nos sumamos al día nacional de la prevención del lavado de activos.</p>
                <a class="btn btn--blue new__read-more" href="">Leer más</a>
            </article>
        </section>
    </section>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>