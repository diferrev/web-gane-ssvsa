<?php 
/* Template name: Página de inicio */  
get_header();
?>    
        <main class="content">
        <?php
        $promos = new WP_Query( array(
            'post_type' => 'promos',
            'posts_per_page' => 1
        ));
        if( $promos->have_posts() ) : ?>
            <section class="slider">
            <?php while( $promos->have_posts() ) : $promos->the_post(); 
                $promo_intro = get_post_meta( $post->ID, 'promo_intro', true);
                $promo_image_id = get_post_meta( $post->ID, 'promo_image', true);
                $promo_cta_text = get_post_meta( $post->ID, 'promo_cta_text', true);
                $promo_cta_link = get_post_meta( $post->ID, 'promo_cta_link', true);
                if($promo_image_id) 
                {
                    $promo_image = wp_get_attachment_image_src($promo_image_id, 'full');
                }
            ?>
                <article class="slider-item" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="50" style="background-image: url('<?php echo $promo_image[0]; ?>');">
                    <div class="container">
                        <div class="slider-item__info rv-bottom">
                            <h1 class="slider-item__title"><?php the_title(); ?></h1>
                            <a href="<?php echo $promo_cta_link; ?>" class="btn btn--raised btn--cta btn--yellow"><?php echo $promo_cta_text; ?></a>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
            </section>
        <?php endif; ?>
            <section class="promos section">
                <div class="container">
                    <div class="card promo rv-bottom-many">
                        <figure class="card__image">
                            <a href="">
                                <img src="http://placehold.it/400x250" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="card promo rv-bottom-many">
                        <figure class="card__image">
                            <a href="">
                                <img src="http://placehold.it/400x250" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="card promo rv-bottom-many">
                        <figure class="card__image">
                            <a href="">
                                <img src="http://placehold.it/400x250" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="card promo rv-bottom-many">
                        <figure class="card__image">
                            <a href="">
                                <img src="http://placehold.it/400x250" alt="">
                            </a>
                        </figure>
                    </div>
                </div>
            </section>
            <section class="supergiros" data-stellar-background-ratio="0.5">
                <div class="overlay overlay--supergiros"></div>
                <div class="container">
                    <div class="supergiros__logo rv-right">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo-supergiros.png" alt="">
                    </div>
                    <div class="supergiros__info rv-left">
                        <h3>Envía y recibe giros a nivel nacional</h3>
                        <a href="<?php bloginfo( 'url' ); ?>/giros" class="btn btn--raised btn--blue">Ver tarifas</a> <a href="https://supergiros.com.co/" target="_blank" class="btn btn--raised">Ir a supergiros.com.co</a>
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
        </main>
<?php get_footer();?>