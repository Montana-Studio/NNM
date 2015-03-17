<div class="content-entry">
	<h2 class="tit-secction">articulos</h2>
	<ul>
		<?php
		$args = array(
			'category_name' => 'articulos',
			'posts_per_page' => 3
		);
		$myvar = new WP_Query($args);
		$i=1;
		if($myvar->have_posts()) : while($myvar->have_posts()): $myvar->the_post(); ?>

			<?php if ($i==1): ?>

			<li class="featured">

				<a href="<?php the_permalink() ?>">
					<div class="text">
						<h2><?php the_title() ?></h2>

						<p><?php the_excerpt(); ?><!-- span class="more">[...]</span --></p>

						<span class="autor">por <?php echo get_the_author() ?></span>
						<span class="date"><?php the_time('j F') ?></span>
					</div>
					<img class="img-articulo" src="<?php echo get_field('imagen_destacado_articulos_home', 13427) ?>">
				</a>
				<div class="clear"></div>
			</li>

			<?php elseif($i==2): ?>
				<li class="first">
					<a href="<?php the_permalink() ?>">
						<div class="text">
							<h2><?php the_title() ?></h2>
							<span class="autor">por <?php echo get_the_author() ?></span>
							<span class="date"><?php the_time('j F, Y') ?></span>
						</div>
					</a>
				</li>
			<?php else: ?>
				<li>
					<a href="<?php the_permalink() ?>">
						<div class="text">
							<h2><?php the_title() ?></h2>
							<span class="autor">por <?php echo get_the_author() ?></span>
							<span class="date"><?php the_time('j F, Y') ?></span>
						</div>
					</a>
				</li>
			<?php endif ?>
		<?php $i++; endwhile;
		wp_reset_postdata();
		endif; ?>

	</ul>
</div>