 <?php get_header();?>       
        <div class="content">
            <header class="post__header" style="background-image: url(<?php bloginfo('template_url');?>/assets/img/examples/noticias.jpg)">
                <hgroup class="container">
                    <h1 class="post__title container">
                        Últimas noticias
                    </h1>
                </hgroup>  
            </header>
            <section class="container main-sidebar">
                <main class="main-column news-feed">
                    <article class="new new--horizontal">
                        <figure class="new__thumbnail">
                            <a href="">
                                <img src="<?php bloginfo('template_url');?>/assets/img/examples/protegiro.jpg" alt="">
                            </a>
                        </figure>
                        <div class="new__info">
                            <h2 class="new__title"><a href="">ProteGiro, Porque 3 son mejor que 1</a></h2>
                            <span class="new__meta"><i class="fa fa-calendar"></i> 3 de Marzo, 2017</span>
                            <p>¿Qué es? Es el mas novedoso producto que Supergiros diseñó pensando en ti, porque sabemos lo importante que eres para</p>
                            <a href="" class="btn btn--blue">Leer más</a>
                        </div>
                    </article>
                    <article class="new new--horizontal">
                        <figure class="new__thumbnail">
                            <a href="">
                                <img src="<?php bloginfo('template_url');?>/assets/img/examples/bancos.jpg" alt="">
                            </a>
                        </figure>
                        <div class="new__info">
                            <h2 class="new__title"><a href="">Llamado a Bancos Americanos en Conferencia Mundial de Bancos</a></h2>
                            <span class="new__meta"><i class="fa fa-calendar"></i> 8 de Marzo, 2017</span>
                            <p>Bancos corresponsales van a llevar a la ilegalidad a las empresas de giros y juegos en Colombia. Los sectores de</p>
                            <a class="btn btn--blue new__read-more" href="">Leer más</a>
                        </div>
                        
                    </article>
                    <article class="new new--horizontal">
                        <figure class="new__thumbnail">
                            <a href="">
                                <img src="<?php bloginfo('template_url');?>/assets/img/examples/oficiales.jpg" alt="">
                            </a>
                        </figure>
                        <div class="new__info">
                            <h2 class="new__title"><a href="">Plenario de Oficiales de Cumplimiento 2017</a></h2>
                            <span class="new__meta"><i class="fa fa-calendar"></i> 5 de Marzo, 2017</span>
                            <p>El día 28 de febrero de 2017, se llevó a cabo Reunión Plenario de Oficiales de Cumplimiento del Sector de</p>
                            <a class="btn btn--blue new__read-more" href="">Leer más</a>
                        </div>
                    </article>
                    <article class="new new--horizontal">
                        <figure class="new__thumbnail">
                            <a href="">
                                <img src="<?php bloginfo('template_url');?>/assets/img/examples/antilavado.jpg" alt="">
                            </a>
                        </figure>
                        <div class="new__info">
                            <h2 class="new__title"><a href="">Nos sumamos a la lucha - Prevención LA/FT</a></h2>
                            <span class="new__meta"><i class="fa fa-calendar"></i> 29 de Octubre, 2017</span>
                            <p>Este 29 de octubre de 2016 nos sumamos al día nacional de la prevención del lavado de activos.</p>
                            <a class="btn btn--blue new__read-more" href="">Leer más</a>
                        </div>
                    </article>
                </main>
                <aside class="sidebar-column">
                    <p>Soy la barra lateral</p>
                </aside>
            </section>
        </div>
<?php get_footer();?>