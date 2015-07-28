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
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51156134-6', 'auto');
		  ga('send', 'pageview');

		</script>
		<style>
			@media only screen and (min-width:768px) and (max-width:1024px){
				.sidebar-ad{
					width:50% !important;
					box-sizing:border-box;
					float:left;
					clear:none !important;
				}
				.face-box{
					width: 50% !important;
				}
			}
		</style>

		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.4";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			</script>
	</head>
	<body <?php body_class(); ?>>
		
		<div class="mobile-categorys">
			<?php html5blank_nav(); ?>
		</div>

		<?php include (TEMPLATEPATH . '/svg_content.php'); ?>

		<!-- wrapper -->
		<div class="wrapper">
			
			<div style="width:320px;margin:0 auto;position:fixed;bottom:0;left:0;right:0;z-index:9999999;">
				<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
				  googletag.pubads().definePassback('/109046684/320x50_itt-mobile', [320, 50]).display();
				</script>
			</div>

			<div style="width:320px;margin:5px auto;clear:both;display:block;">
				<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
				  googletag.pubads().definePassback('/109046684/320x100_header-mobile', [320, 100]).display();
				</script>
			</div>

			<div style="max-width:970px;margin:0 auto;display:block;clear:both;padding-top:10px;">
		
				<!--NNM TAG ACCOUNT-->
				<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
				  googletag.pubads().definePassback('/109046684/970x90_header', [970, 90]).display();
				</script>

			</div>

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
					<nav class="nav" role="navigation" style="clear:both;">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
					<div style="clear:both;"></div>

			</header>

			<div style="max-width:728px;margin:10px auto 0;">
				
				<!--NNM TAG ACCOUNT-->
				<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
				  googletag.pubads().definePassback('/109046684/728x90_header', [728, 90]).display();
				</script>

			</div>

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
