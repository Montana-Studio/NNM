<?php get_header(); ?>
<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  ?>

	<div class="<?php echo (in_category('discos')) ? "discos-inner " : "" ?>singles">
		
		<?php if (in_category( 'discos' )): ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<h2 class="tit-single">Discos</h2>

			<div class="post">
				
				<div class="featured">

					<?php the_post_thumbnail('300x300',array('class'=>'img-discos')); ?>

					<div class="texto">
						<div class="cont-featured">
							<h3><?php the_field('artista') ?><small><?php the_field('album') ?></small></h3>
						
							<span class="sello"><?php the_field('sello') ?></span>
							<span class="lanzamiento"><?php the_field('lanzamiento') ?></span>
							<span class="rate">

								<?php $rating = get_field('rating'); ?>
								<?php for ($i=0; $i < $rating ; $i++): ?> 
									<img src="<?php bloginfo('template_url'); ?>/img/discos-featured-rate-on.png">
								<?php endfor ?>

								<?php for ($i=0; $i < 5-$rating ; $i++): ?> 
									<img src="<?php bloginfo('template_url'); ?>/img/discos-featured-rate-off.png">
								<?php endfor ?>
							
								<span class="nota"><?php echo $rating ?>/5</span>
							</span>
																
							<span class="autor">por <?php echo get_the_author(); ?></span>
							<span class="date"><?php the_time('j F, Y') ?></span>
						</div>
					</div>
					
				</div>
				
				<div class="content">

					<?php the_content(); ?>
					
					<h3 class="leave-comment">Deja tu Comentario:</h3>
					
				</div>
				
				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

				<?php comments_template(); ?>
				
			</div>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->
			<?php endif; ?>
		<?php else: ?>

			<div class="post">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="cont-single-post">

					<h2><?php the_title() ?></h2>

					<div class="meta">
						<span class="autor">por <?php echo get_the_author() ?></span>
						<span class="date"><?php the_time('j F, Y') ?></span>
					</div>

					<?php the_post_thumbnail('670x250',array('class'=>'img-single')); ?>

					<?php if (get_field('creditos')): ?>
					<span class="leyenda"><?php the_field('creditos') ?></span>
					<?php endif ?>
					

					<div class="texto">

						<?php the_content(); ?>

						<h3 class="leave-comment">Deja tu Comentario:</h3>

					</div>

				</div>
				<div class="cont-single-post">
					
					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					<?php comments_template(); ?>

				</div>

				<?php endwhile; ?>
				<?php else: ?>
				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->
				<?php endif; ?>

			</div>
		<?php endif ?>

	</div>
<?php get_sidebar('inner'); ?>
<?php get_footer(); ?>