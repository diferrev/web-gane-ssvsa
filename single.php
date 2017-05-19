<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="post">
<?php if( has_post_thumbnail() ) : ?>
    <header class="post__header post__header--no-height" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>">
<?php else: ?>
    <header class="post__header">
<?php endif; ?>
        <div class="overlay"></div>
        <h1 class="post__title container"><?php the_title(); ?></h1>
    </header>
    <div class="post__content">
        <div class="container">
            <aside class="post__date"><i class="fa fa-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?></aside>
            <?php the_content(); ?>
        </div>
    </div>
</article>
<?php endwhile; ?>
<?php get_footer();?>