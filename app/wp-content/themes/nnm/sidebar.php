<!-- sidebar -->
<aside class="sidebar" role="complementary">
	
	<?php get_template_part('agenda'); ?>
	
	<iframe class="face-box" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FNNMcl&amp;height=258&amp;show_faces=true&amp;colorscheme=dark&amp;stream=false&amp;show_border=true&amp;header=false&amp;appId=580547425323200" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px;" allowTransparency="true"></iframe>
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
