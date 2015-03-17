<h2 class="tit-secction">REVIEWS DISCOS</h2>
<div class="content-entry">
	<div id="slider2" class="flexslider">
		<ul class="slides">		
			<?php
			$args = array(
				'category_name' => 'discos',
				'posts_per_page' => 5
			);
			$discos = new WP_Query($args);

			if($discos->have_posts()) : while($discos->have_posts()): $discos->the_post(); ?>
				<li>
					<a href="<?php the_permalink() ?>"> 
						<div class="pic"> 
							<?php the_post_thumbnail( '320x320' ) ?>
						</div> 

						<div class="texto"> 
							<span class="banda"><?php the_field('artista') ?></span> 
							<span class="disco"><?php the_field('album') ?> <?php the_field('sello'); ?></span> 
							<span class="date"><?php the_time('d.m.Y'); ?></span>

							<span class="rate">

								<?php $rating = get_field('rating'); ?>
								<?php for ($i=0; $i < $rating ; $i++): ?> 
									<img src="<?php bloginfo('template_url'); ?>/img/reviews-rate-on.png">
								<?php endfor ?>

								<?php for ($i=0; $i < 5-$rating ; $i++): ?> 
									<img src="<?php bloginfo('template_url'); ?>/img/reviews-rate-off.png">
								<?php endfor ?>
							
								<span class="nota"><?php echo $rating ?>/5</span>
							</span>

						</div>
					</a>
				</li>
			<?php endwhile;
			wp_reset_postdata();
			endif; ?>
			
		</ul>
	</div>
</div>