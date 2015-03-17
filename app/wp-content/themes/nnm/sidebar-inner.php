<!-- sidebar -->
<aside class="sidebar" role="complementary">
	
	<?php get_template_part('agenda'); ?>

	<?php global $post; ?>	
	<?php
	if (is_category('44')) {
	?>
	<?php } ?>
	<?php if (is_single()): ?>
		<?php $posts = get_field('posts_relacionados', $post->ID); ?>
		<?php if ($posts): ?>
	    	<div id="posts-related">
				
				<h2>Posts Relacionados</h2>
				
				<ul>
				<?php $posts = get_field('posts_relacionados', $post->ID); ?>

				<?php foreach ($posts as $post): ?>
				<?php setup_postdata($post); ?>
					<li>	
						<a href="<?php the_permalink() ?>">
						<h3><?php the_title() ?></h3>
						<span class="autor">por <?php echo get_the_author() ?></span>
						<span class="date"><?php the_time('j F') ?></span>
						</a>
					</li>
				<?php endforeach ?>
				<?php wp_reset_postdata(); ?>
					
				</ul>

			</div>
		<?php endif ?>
		
	<?php endif ?>

	<iframe class="face-box" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FNNMcl&amp;height=258&amp;show_faces=true&amp;colorscheme=dark&amp;stream=false&amp;show_border=true&amp;header=false&amp;appId=580547425323200" scrolling="no" frameborder="0" style="border:none; overflow:hidden;height:258px;" allowTransparency="true"></iframe>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
</aside>
<!-- /sidebar -->