<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  ?>
<?php
if (is_category('44')) {
?>
<?php } ?>

<div class="featured">
	<?php $cat_id = 'category_'.get_query_var('cat'); ?>

	<?php
		$args = array(
			'cat' => get_query_var('cat'),
			'posts_per_page' => 1,
		);
		$featured = new WP_Query($args);

		if($featured->have_posts()) : while($featured->have_posts()): $featured->the_post(); $exposts[] = get_the_ID();?>
		
		<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		
		<a href="<?php the_permalink(); ?>">
			<?php //the_post_thumbnail(array(430, 250), array('class'=>'featured-img')) ?>

			<div class="featured-img" style="background-image:url(<?php echo $feat_image;?>);"></div>

			<div class="texto">

				<h3><?php the_title() ?></h3>
				<!--p><?php the_excerpt(); ?></p-->
				<p>
					<?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 30, '[...]' ); ?>
				<p><?php echo $trimmed_content; ?></p>
				</p>

				<small class="date"><?php the_time('j F') ?></small>
			</div>
		</a>

		<?php endwhile;
		wp_reset_postdata();
	endif; ?>

</div>

<div class="post">

	<div class="columna">
		<ul>
		<?php
		$args = array(
			'cat' => get_query_var('cat'),
			'posts_per_page' => 9,
			'paged' => $paged,
			'post__not_in' => $exposts
		);
		$query = new WP_Query($args);
		$i=1;
		if($query->have_posts()) : while($query->have_posts()): $query->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( '208x100') ?>
					<h3><?php the_title() ?></h3>

					<small class="autor hide">por <?php echo get_the_author() ?></small>
					<small class="date hide"><?php the_time('j F, Y') ?></small>

				</a>
			</li>

			<?php if ($i==3 || $i==6): ?>
				</ul></div> <div class="columna"><ul>
			<?php elseif($i==9): ?>
				</ul></div> 
			<?php endif ?>
			
		<?php $i++; endwhile;
		wp_reset_postdata();
		endif; ?>

</div>