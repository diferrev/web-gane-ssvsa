<?php 
/* Template name: Página de Resultados */  
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="post">
    <header class="post__header" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="50" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')"></header>
    <div class="section">
        <div class="container">
            <h1 class="post__title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <form class="form results__form">
                <input type="text" class="form__item" id="datepicker" placeholder="DD/MM/AAAA" readonly>
                <button type="button" class="btn btn--raised btn--blue" data-button='search'><i class="fa fa-search"></i></button>
            </form>
            <h3 data-resultdate class="text-center">Últimos resultados</h3>
            <div class="results">
                <template id="template-result">
                <div class="card result">
                    <figure class="card__image">
                        <img data-image src="" alt="">
                    </figure>
                    <div class="card__info">
                        <div class="result__info">
                            <div data-number class="result__number">2547</div>
                            <div data-sign="container" class="result__sign hidden">
                                <i data-sign="icon" class="zodiac"></i>
                                <span data-sign="name"></span>
                            </div>
                        </div>
                        <h2 data-lottery class="card__title result__lottery"></h2>
                        <span data-date class="card__meta result__date"><i class="fa fa-calendar"></i> </span>
                    </div>
                </div>
                </template>
            </div>
        </div>
    </div>
</article>
<?php endwhile; ?>
<?php get_footer(); ?>