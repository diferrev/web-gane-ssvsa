<?php 
/* Template name: Página de inicio */  
get_header();
?>    
        <main class="content">
            <section class="slider">
                <article class="slider-item" style="background-image: url(<?php bloginfo('template_url');?>/assets/img/bg.jpeg);">
                    <div class="container">
                        <div class="slider-item__info">
                            <h1 class="slider-item__title">Bienvenido a nuestro nuevo sitio web</h1>
                            <a href="" class="btn btn--cta btn--yellow">Llamado a la acción</a>
                        </div>
                    </div>
                </article>
            </section>
            <section class="featured home-section">
                <div class="container featured__inner">
                    <figure class="featured__item">
                        <a href="">
                            <img src="http://placehold.it/400x250" alt="">
                        </a>
                    </figure>
                    <figure class="featured__item">
                        <a href="">
                            <img src="http://placehold.it/400x250" alt="">
                        </a>
                    </figure>
                    <figure class="featured__item">
                        <a href="">
                            <img src="http://placehold.it/400x250" alt="">
                        </a>
                    </figure>
                    <figure class="featured__item">
                        <a href="">
                            <img src="http://placehold.it/400x250" alt="">
                        </a>
                    </figure>
                </div>
            </section>
            <section class="news home-section">
                <div class="container">
                    <h3 class="container home-section__title">Noticias</h3>
                    <section class="news__inner">
                        <article class="new">
                            <figure class="new__thumbnail">
                                <a href="">
                                    <img src="<?php bloginfo('template_url');?>/assets/img/examples/protegiro.jpg" alt="">
                                </a>
                            </figure>
                            <h2 class="new__title"><a href="">ProteGiro, Porque 3 son mejor que 1</a></h2>
                            <span class="new__meta"><i class="fa fa-calendar"></i> 28 de Marzo, 2017</span>
                            <p>¿Qué es? Es el mas novedoso producto que Supergiros diseñó pensando en ti, porque sabemos lo importante que eres para</p>
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
                </div>
            </section>
        </main>
<?php get_footer();?>