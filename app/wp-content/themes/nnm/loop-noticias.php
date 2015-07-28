<div class="content-entry">
	<h2 class="tit-secction">noticias</h2>
	<ul>
	<?php
		$args = array(
			'category_name' => 'noticias',
			'posts_per_page' => 7
		);
		$noticias = new WP_Query($args);

		$i=1;

		if($noticias->have_posts()) : while($noticias->have_posts()): $noticias->the_post(); ?>

		<?php if ($i==1|$i==3|$i==6): ?>

		<div class="columna">

			<?php endif ?>
				<li class="post-noticias">
					<a href="<?php the_permalink(); ?>">
						<?php if (in_array($i, array(1,3,6))): ?>
							<?php //the_post_thumbnail('208x100') ?>
							<?php the_post_thumbnail() ?>
						<?php endif ?>

						<h2><?php the_title() ?></h2> 

						<span class="date"><?php the_time('j F') ?></span> 
					</a>
				</li>

			<?php if ($i==2 || $i==5): ?>

		</div>

		<?php elseif($i==7): ?>
		<?php endif ?>
		<?php $i++; endwhile;
		wp_reset_postdata();
	endif; ?>
	</ul>
</div>

