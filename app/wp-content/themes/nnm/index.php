<?php get_header(); ?>

	<main class="all-content" role="main">

		<section class="sliders">
			<div id="slider1" class="flexslider">

			  <ul class="slides">

				<?php $query = new WP_Query('posts_per_page=7&category_name=destacado-home&ordeby=DESC'); ?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<a href=" <?php the_permalink(); ?>" rel="" title="">
						<main class="post">
							<div class="img_slide" style="background-image:url(<?php echo $feat_image;?>);"></div>
							<h2><?php the_title(); ?></h2>

							<p class="post_excerpt">
								<?php the_excerpt(); ?>
							</p>

						</main>
					</a>

				</li>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
				<?php endif; ?>
			   
			  </ul>
			</div>
		</section>
		
		<section class="noticias">

			<?php get_template_part('loop-noticias'); ?>

		</section>

	</main>

	<?php get_sidebar(); ?>


	<div style="max-width:970px;margin:0 auto;display:block;clear:both;padding-top:10px;">
		
		<!--NNM TAG ACCOUNT-->
		<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
		  googletag.pubads().definePassback('/109046684/970x90_content', [970, 90]).display();
		</script>

	</div>

	<main class="feeds">
			
			<section class="top10">
				
				<?php get_template_part('loop-top10'); ?>
				
				<div style="width:200px;clear:both;margin:0 auto;display:block;padding-top: 10px;">
					
					<!--NNM TAG ACCOUNT-->
					<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
					  googletag.pubads().definePassback('/109046684/200x200_content', [200, 200]).display();
					</script>

				</div>

			</section>

			<section class="recomendados">
				
				<?php get_template_part('loop-recomendados'); ?>

			</section>

			<section class="articulos">

				<?php get_template_part('loop-articulos'); ?>

			</section>

			<section class="mixtapes">

				<?php get_template_part('loop-mixtapes'); ?>

			</section>

			<section class="reviews-tv">
				
				<div style="max-width:728px;margin:0 auto;clear:both;display:block;padding-top: 10px;">
					
					<!--NNM TAG ACCOUNT-->
					<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
					  googletag.pubads().definePassback('/109046684/728x90_content', [728, 90]).display();
					</script>

				</div>

				<article class="review-discos">
					<?php get_template_part('loop-reviewdiscos'); ?>
				</article>

			</section>

	</main>
<?php get_footer(); ?>
