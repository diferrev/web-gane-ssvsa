 <?php get_header();?>
 <div class="post">
 <div class="post__header" style="background-image: url(<?php bloginfo('template_url');?>/assets/img/noticias-gane.jpg)"></div>
 <section class="section">
     <div class="container">
         <h1 class="post__title">Noticias</h1>
         <?php if ( have_posts() ) : ?>
         <section class="news__inner">
         <?php while ( have_posts() ) : the_post(); ?>
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
         <nav>
            <ul class="pager">
            <?php if( get_previous_posts_link() ) : ?>
                <li class="previous">
                    <?php previous_posts_link('<i class="fa fa-chevron-left"></i> Anterior'); ?>
                </li>
            <?php endif; ?>
            <?php if( get_next_posts_link() ) : ?>
                <li class="next">
                    <?php next_posts_link('Siguiente <i class="fa fa-chevron-right"></i>'); ?>
                </li>
            <?php endif; ?>
            </ul>
        </nav>
         <?php else: ?>
            <p>No hay noticias publicadas.</p>
         <?php endif; ?>
         </main>
     </div>
 </section>
 </div>
<?php get_footer(); ?>