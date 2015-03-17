<?php get_header(); ?>

	<main role="main" class="category-content">
		<!-- section -->
		<section class="category-post">

			<h2 class="tit-category"><?php single_cat_title(); ?></h2>

			<?php get_template_part('loop-category'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
