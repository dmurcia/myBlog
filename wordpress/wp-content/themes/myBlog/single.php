<?php get_header(); ?>

	<section id="main">
        <section id="articles-list">
        	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
				<div class="thumb">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()) { the_post_thumbnail('list-articles-thumbs'); } ?>
					</a>
				</div>

                <hgroup>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </hgroup>
                <div class="date"><?php the_date(); ?> en <span><?php the_category(); ?></span></div>
                <div class="extract"><?php the_content(); ?></div>
            </article>
			<?php endwhile; else: ?>
			<h1>No se encontraron Art&iacute;culos</h1>
			<?php endif; ?>

            <div id="comentarios">
                <h3>Comentarios</h3>
                <div id="caja-comentarios">
                    <?php comments_template(); ?>
                </div>
            </div>
        </section>
        <!--/ ARTICLE LIST -->

<?php get_sidebar(); ?>
	</section>
    <!--/ MAIN -->

<?php get_footer(); ?>