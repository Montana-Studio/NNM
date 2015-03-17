<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  ?>

<img src="<?php the_field('imagen_categoría', $cat_id) ?>">
	
<div class="featured discos">
	<?php
	$args = array(
		'category_name' => 'discos',
		'posts_per_page' => 1, 

	);
	$featured = new WP_Query($args);

	if($featured->have_posts()) : while($featured->have_posts()): $featured->the_post(); ?>
		<a href="<?php the_permalink(); ?>">

			<?php the_post_thumbnail('320x320', array('class'=>'featured-img')); ?>
			
			<div class="texto">

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

				
					<span class="nota"><?php echo $rating ?>/5</span><div class="cf"></div>
				</span>
					
				<?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 40, '[...]' ); ?>
				<p><?php echo $trimmed_content; ?></p>
					
				<!-- span class="autor">por <?php echo get_the_author() ?></span -->
				<span class="date"><?php the_time('j F') ?></span>

			</div>
		</a>
	<?php endwhile;
	wp_reset_postdata();
	endif; ?>
	
</div>
		
<div class="post post-discos">
	
		<div class="columna">
		<ul>
		<?php
		$args = array(
			'cat' => get_query_var('cat'),
			'posts_per_page' => 9,
			'paged' => $paged,
			//'post__not_in' => $exposts
		);
		$query = new WP_Query($args);
		$count=1;
		if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>">

					<?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' ) ?>

					<h3><?php the_field('artista') ?><small><?php the_field('album') ?></small></h3>
					
					<span class="sello"><?php the_field('sello') ?></span>
					<span class="lanzamiento"><?php the_field('lanzamiento') ?></span>

					<?php $rating = get_field('rating'); ?>
					<?php if ($rating): ?>
					<span class="rate">

						<?php for ($i=0; $i < $rating ; $i++): ?> 
							<img src="<?php bloginfo('template_url'); ?>/img/reviews-rate-on.png">
						<?php endfor ?>

						<?php for ($i=0; $i < 5-$rating ; $i++): ?> 
							<img src="<?php bloginfo('template_url'); ?>/img/reviews-rate-off.png">
						<?php endfor ?>
				
						<span class="nota"><?php echo $rating ?>/5</span>
					</span>

					<?php endif ?>
					
					<!-- span class="autor">por <?php echo get_the_author() ?></span -->
					<span class="date"><?php the_time('j F') ?></span>

				</a>
			</li>

			<?php if ($count==3 || $count==6): ?>
				</ul></div> <div class="columna"><ul>
			<?php elseif($count==9): ?>
				</ul></div>
			<?php endif ?>

		<?php $count++; endwhile;
		wp_reset_postdata();
		endif; ?>
</div>