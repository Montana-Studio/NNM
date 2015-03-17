<div class="content-entry">
	<h2 class="tit-secction">top 10</h2>
		<ul>
			<?php
			$args = array(
				'category_name' => 'top-10',
				'posts_per_page' => 5
			);
			$myvar = new WP_Query($args);
			$i = 1;
			if($myvar->have_posts()) : while($myvar->have_posts()): $myvar->the_post(); ?>

			<?php if ($i==1): ?>
				<li class="first">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail( '208x100' ) ?>
			<?php elseif($i==5): ?>
				<li class="last">
					<a href="<?php the_permalink() ?>">
			<?php else: ?>
				<li>
					<a href="<?php the_permalink() ?>">
			<?php endif ?>
						<h2><?php the_title(); ?></h2>
						<?php if ($i==1): ?>
							<!-- span class="autor">por <?php echo get_the_author() ?></span -->
						<?php endif ?>
					</a>
				</li>
			<?php $i++; endwhile;
			wp_reset_postdata();
			endif; ?>
		</ul>
		
		<?php
		    // Get the ID of a given category
		    $category_id = get_cat_ID( 'top-10' );

		    // Get the URL of this category
		    $category_link = get_category_link( $category_id );
		?>

		<div class="ver-mas"><a href="<?php echo esc_url( $category_link ); ?>">ver más</a></div>
</div>