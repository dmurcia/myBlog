<?php get_header(); ?>

	<section id="main">
        <section id="articles-list">
        	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
                <hgroup>
                    <h2><?php the_title(); ?></h2>
                </hgroup>
                <div class="date"><?php the_date(); ?> en <span><?php the_category(); ?></span></div>
                <div class="extract"><?php the_content(); ?></div>
            </article>
			<?php endwhile; else: ?>
			<h1>No se encontraron Art&iacute;culos</h1>
			<?php endif; ?>
        </section>
        <!--/ ARTICLE LIST -->

<?php get_sidebar(); ?>
	</section>
    <!--/ MAIN -->

<?php get_footer(); ?>