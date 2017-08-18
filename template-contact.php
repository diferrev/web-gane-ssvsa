<?php 
/* Template name: Página de Contacto */  
get_header();
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
    wpcf7_enqueue_styles();
}
?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="post">
    <header class="post__header post__header--map" id="post__header"></header>
    <div class="main-sidebar contact">
        <div class="container">
            <main class="main">
                <h1 class="post__title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </main>
            <aside class="sidebar">
                <?php get_sidebar( 'contact' ); ?>
            </aside>
        </div>
    </div>
</article>
<?php endwhile; ?>
<?php get_footer(); ?>