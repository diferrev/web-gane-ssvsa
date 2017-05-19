<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="post">
    <header class="post__header" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="50" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
    </header>
    <div class="post__content">
        <div class="container">
            <h1 class="post__title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</article>
<?php endwhile; ?>
<?php get_footer();?>