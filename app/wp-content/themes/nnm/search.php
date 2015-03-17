<?php get_header(); ?>

	<main class="all-content-search" role="main">
		<!-- section -->
		<section class="resultados-busqueda">
			
			<div class="content-entry">

				<h2 class="tit-secction"><?php echo sprintf( __( '%s Resultados para: ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>

				<ul class="busquedas">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<li class="busqueda">

							<a href="<?php the_permalink(); ?>">
								<h2><?php the_title(); ?></h2>
								<span class="date">Posteado en:<?php the_date('F j, Y'); ?>,<?php the_time(); ?> por: <?php the_author(); ?></span>

								<?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 40, '[...]' ); ?>
								<p><?php echo $trimmed_content; ?></p>
							</a>
						</li>

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>
							<h2><?php _e( 'No post.', 'html5blank' ); ?></h2>
						</article>
						<!-- /article -->

					<?php endif; ?>

					<div style="clear:both;"></div>
				</ul>
			</div>

			<?php //get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
