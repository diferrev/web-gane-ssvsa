<?php 
/* Template name: Página de LAFT */  
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="post">
    <header class="post__header" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="50" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')"></header>
    <div class="post__content">
        <div class="container">
            <h1 class="post__title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</article>
<?php endwhile; ?>
<?php
$relatedNews = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'tag' => 'laft'
    )
);
if ( $relatedNews->have_posts() ) : ?>
<section class="section">
    <div class="container">
        <h3 class="section__title">Noticias <strong>relacionadas</strong></h3>
        <section class="news__inner">
            <?php while ( $relatedNews->have_posts() ) : $relatedNews->the_post(); ?>
            <article class="card new">
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
<?php get_footer(); ?>