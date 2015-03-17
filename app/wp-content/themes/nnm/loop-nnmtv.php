<h2 class="tit-secction">nnm tv</h2>
<div class="content-entry">
	<div id="slider3" class="flexslider">
		<ul class="slides">	
			<?php
			$args = array(
				'category_name' => 'nnm-tv',
				'posts_per_page' => 5
			);
			$nnmtv = new WP_Query($args);

			if($nnmtv->have_posts()) : while($nnmtv->have_posts()): $nnmtv->the_post(); ?>
				<li><?php the_excerpt(); ?></li>
			<?php endwhile;
			wp_reset_postdata();
			endif; ?>

		</ul>
	</div>
</div>