<div class="content-entry">
	<h2 class="tit-secction">recomendados</h2>
	<ul>
		<?php
		$args = array(
			'category_name' => 'recomendados',
			'posts_per_page' => 3
		);
		$myvar = new WP_Query($args);

		if($myvar->have_posts()) : while($myvar->have_posts()): $myvar->the_post(); ?>
			<li class="post-recomendados"><a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('208x100') ?>
				<h2><?php the_title(); ?></h2>
				<!-- span class="autor">por <?php echo get_the_author() ?></span -->
				<span class="date"><?php the_time('j F') ?></span>
			</a></li>
		<?php endwhile;
		wp_reset_postdata();
		endif; ?>
		<div style="clear:both;"></div>
	</ul>

	<?php
		    // Get the ID of a given category
		    $category_id = get_cat_ID( 'recomendados' );

		    // Get the URL of this category
		    $category_link = get_category_link( $category_id );
		?>

		<div class="ver-mas"><a href="<?php echo esc_url( $category_link ); ?>">ver más</a></div>
</div>