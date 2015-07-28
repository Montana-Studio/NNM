<div class="content-entry">
	<h2 class="tit-secction">mixtapes</h2>
	<ul>
		<?php
		$args = array(
			'category_name' => 'mixtapes',
			'posts_per_page' => 5
		);
		$myvar = new WP_Query($args);
		$i=1;
		if($myvar->have_posts()) : while($myvar->have_posts()): $myvar->the_post(); ?>

		<?php if ($i==1): ?>
			<li class="featured">
				<a href="<?php the_permalink(); ?>">
					<?php //the_post_thumbnail( '208x100' ) ?>
					<?php the_post_thumbnail() ?>
					<h2><?php the_title() ?> <!-- span class="more">[...]</span --></h2>
				</a>
			</li>
		<?php else: ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title() ?> <!-- span class="more">[...]</span --></h2>
				</a>
			</li>
		<?php endif; ?>

		<?php $i++; endwhile;
		wp_reset_postdata();
		endif; ?>

	</ul>
	<?php
	    // Get the ID of a given category
	    $category_id = get_cat_ID( 'mixtapes' );

	    // Get the URL of this category
	    $category_link = get_category_link( $category_id );
	?>

	<div class="ver-mas"><a href="<?php echo esc_url( $category_link ); ?>">ver más</a></div>
</div>