<!-- sidebar -->
<aside class="sidebar" role="complementary">
		
	<div style="width:320px;margin:0 auto 5px;clear:both;display:block;">
		<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
		  googletag.pubads().definePassback('/109046684/320x50_content-mobile', [320, 50]).display();
		</script>
	</div>

	<div style="width:300px;margin:0 auto;clear:both;display:block;">
		<!--NNM TAG ACCOUNT-->
		<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
		  googletag.pubads().definePassback('/109046684/300x100_sidebar', [300, 100]).display();
		</script>
	</div>

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

	<div class="fb-page face-box" data-href="https://www.facebook.com/nnmcl" data-width="300" data-height="285" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/nnmcl"><a href="https://www.facebook.com/nnmcl">NNM.cl</a></blockquote></div></div>

	<div class="sidebar-ad" style="width:300px;margin:0 auto;padding: 10px 10px 0;clear:both;">
		<!--NNM TAG ACCOUNT-->
		<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
		  googletag.pubads().definePassback('/109046684/300x250_sidebar', [300, 250]).display();
		</script>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
</aside>
<!-- /sidebar -->