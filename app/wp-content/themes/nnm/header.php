<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cc-icons/1.2.1/css/cc-icons.min.css">

	</head>
	<body <?php body_class(); ?>>
		
		<div class="mobile-categorys">
			<?php html5blank_nav(); ?>
		</div>

		<?php include (TEMPLATEPATH . '/svg_content.php'); ?>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<svg viewBox="0 0 409.5 41.758">
								<use xlink:href="#svg-logo_nnm"/>
							</svg>
						</a>
					</div>
					<!-- /logo -->
					<div class="search-div">
						
						<?php get_template_part('searchform'); ?>

					</div>
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>

			<header class="mobile-header">
				
				<nav class="mobile-nav">

					<div class="menu-search-open">
						<img src="<?php echo get_template_directory_uri(); ?>/img/search-boton-bg.png" />
					</div>

					<div class="menu-icon-open">
						<i class="fa fa-bars"></i>
					</div>
					
				</nav>

			</header>

			<div class="mobile-search">
				<?php get_template_part('searchform'); ?>
			</div>
			<!-- /header -->
