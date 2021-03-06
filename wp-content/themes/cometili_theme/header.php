
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title><!--Título da página-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" /><!--Dinamismo do charset UTF-8 automático-->
	<meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<div class="section navegacao">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<a href="<?php echo get_option('home') ?>">
					<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Cometili Logo"></a>
				</div>
				<div class="col-md-9">
					<div class="posicao">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div>
				</div>	
				<div class="col-md-1 login">
					<a class="btn btn-default" href="https://www.cometili.com.br/sistema" role="button" target="_blank">LOGIN</a>						
				</div>
			</div>
		</div>
	</div>