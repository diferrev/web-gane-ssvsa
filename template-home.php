<?php 
/* Template name: Página de inicio */  
get_header();
?>    
        <main class="content">
            <!-- Sección de promocional  -->
            <?php get_template_part( 'template-parts/promos'); ?>
            <!-- Sección de promocional fin -->
            <section class="promos section">
                <div class="container">
                    <div class="card promo rv-bottom-many">
                        <figure class="card__image">
                            <a href="<?php bloginfo( 'url' ); ?>/resultados">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/promo/resultados-sorteos.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="card promo rv-bottom-many">
                        <figure class="card__image">
                            <a href="<?php bloginfo( 'url' ); ?>/recargas">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/promo/recargas-celular.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="card promo rv-bottom-many">
                        <figure class="card__image">
                            <a href="<?php bloginfo( 'url' ); ?>/soat">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/promo/comprar-seguro-soat.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="card promo rv-bottom-many">
                        <figure class="card__image">
                            <a href="<?php bloginfo( 'url' ); ?>/supergiros">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/promo/supergiros.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                </div>
            </section>
            <!-- Simulador de premios de Chance -->
            <section class="simuchance section">
                <div class="container">
                    <div class="simuchance__logo rv-top">
                        <img src="<?php bloginfo( 'template_url' );?>/assets/img/simulador-premios-chance.svg" alt="">
                    </div>
                    <div class="simuchance__main rv-bottom">
                        <div class="simuchance__form">
                            <img src="" alt="">
                            <form>
                                <p>
                                    <label for="">Modalidad</label>
                                    <select data-bet="mode" id="mode">
                                        <option value="0">Selecciona la modalidad</option>
                                        <option value="4">4 Cifras</option>
                                        <option value="4c">4 Cifras Combinado</option>
                                        <option value="3">3 Cifras</option>
                                        <option value="3c">3 Cifras Combinado</option>
                                        <option value="2">2 Cifras</option>
                                        <option value="1">1 Cifra</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="">Valor</label>
                                    <input data-bet="value" type="text">
                                </p>
                                <p>
                                    <button data-bet="calculate" class="btn btn--raised btn--yellow">Calcular</button>
                                </p>
                            </form>
                        </div>
                        <template id="simuchance__template">
                            <div class="simuchance__info">
                                <div class="simuchance__total">
                                    <span>Tu premio es de:</span>
                                    <span class="simuchance__prize"data-prize="netprize"></span>
                                </div>
                                <div class="simuchance__details">
                                    <h3>Detalle</h3>
                                    <div class="simuchance__detail">
                                        <ul class="left">
                                            <li><span>Pr Bruto:</span><span data-prize="grossprize"></span></li>
                                            <li><span>Retención 20%:</span><span data-prize="discount"></span></li>
                                            <li><span>Pr Neto:</span><span data-prize="netprize-det"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="simuchance__link rv-bottom">
                        <p>Al reclamar un premio recuerda revisar los requisitos para el pago de éste en el siguiente botón</p>
                        <a href="<?php bloginfo('url'); ?>/requisitospagopremios" class="btn btn--raised btn--yellow">Requisitos para Pago de Premios</a>
                    </div>
                </div>
            </section>
            <?php $news = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                )
            ); ?>
            <?php if ( $news->have_posts() ) : ?>
            <section class="news section">
                <div class="container">
                    <h3 class="section__title">Últimas <strong>Noticias</strong></h3>
                    <section class="news__inner">
                        <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                        <article class="card new rv-bottom">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <figure class="card__image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                                </a>
                            </figure>
                            <?php endif; ?>
                            <div class="card__info">
                                <h2 class="card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <span class="card__meta"><i class="fa fa-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?></span>
                                <?php the_excerpt() ;?>
                            </div>
                            <div class="card__buttons">
                                <a href="<?php the_permalink(); ?>" class="btn btn--blue btn--raised">Leer más</a>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    </section>
                </div>
            </section>
            <?php endif; ?>
            <section class="supergiros" data-stellar-background-ratio="0.5">
                <div class="overlay overlay--supergiros"></div>
                <div class="container">
                    <div class="supergiros__logo rv-right">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo-supergiros.png" alt="">
                    </div>
                    <div class="supergiros__info rv-left">
                        <h3>Envía y recibe giros a nivel nacional</h3>
                        <a href="<?php bloginfo( 'url' ); ?>/supergiros" class="btn btn--raised btn--blue">Ver tarifas</a> <a href="https://www.supergiros.com.co/" class="btn btn--raised">Ir a supergiros.com.co</a>
                    </div>
                    
                </div>
            </section>
        </main>
<?php get_footer();?>