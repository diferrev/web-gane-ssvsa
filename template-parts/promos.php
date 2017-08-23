<?php
$promos = new WP_Query( array(
    'post_type' => 'promos',
    'posts_per_page' => 1
));
if( $promos->have_posts() ) : ?>
    <section class="slider">    
    <?php while( $promos->have_posts() ) : $promos->the_post(); 
        $promo_intro = get_post_meta( $post->ID, 'promo_intro', true);
        $promo_bg_id = get_post_meta( $post->ID, 'promo_bg', true);
        $promo_image_id = get_post_meta( $post->ID, 'promo_image', true);
        $promo_cta_text = get_post_meta( $post->ID, 'promo_cta_text', true);
        $promo_cta_link = get_post_meta( $post->ID, 'promo_cta_link', true);
        if($promo_bg_id) 
        {
            $promo_bg = wp_get_attachment_image_src($promo_bg_id, 'full');
        }
        if($promo_image_id) 
        {
            $promo_image = wp_get_attachment_image_src($promo_image_id, 'full');
        }
    ?>
        <article class="slider-item" style="background-image: url('<?php echo $promo_bg[0]; ?>');">
           <div class="container">
               <figure class="slider-item__image rv-right">
                   <img src="<?php echo $promo_image[0]; ?>" alt="">
               </figure>
               <div class="slider-item__info rv-left">
                   <p class="slider-item__intro"><?php echo $promo_intro;?></p>
                   <h2 class="slider-item__title"><?php the_title();?></h2>
                   <p class="slider-item__buttons">
                       <a href="<?php echo $promo_cta_link;?>" class="btn btn--raised btn--yellow"><?php echo $promo_cta_text; ?></a>
                   </p>
               </div>
           </div>
        </article>  
    <?php endwhile; ?>
    </section>
<?php endif; ?>