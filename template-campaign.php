<?php 
/* Template name: Campaña Mi primer Héroe */  
get_header();
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
    wpcf7_enqueue_styles();
}
?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="post campaign">
    <header class="post__header" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="50" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
    </header>
    <div class="post__content">
        <div class="container double-column">
            <div class="column campaign__info">
                <?php the_content(); ?>
            </div>
            <div class="column column--overlay campaign__form">
                <h2>Formulario de registro<h2>
                <?php echo do_shortcode( '[contact-form-7 id="339" title="Mi primer heroe"]' ); ?>
            </div>
        </div>
        <?php
        $terms = get_post_meta( $post->ID, 'campaign_terms', true );
        if( $terms ) : ?>
        <div class="container campaign__terms">
            <h2>Términos y condiciones</h2>
            <?php echo $terms; ?>
        </div>
        <?php endif; ?>
    </div>
</article>
<?php endwhile; ?>
<?php get_footer();?>