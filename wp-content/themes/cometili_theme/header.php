
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
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" /> <!--Link do bootstrap-->    
    <link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" /> <!--Link do bootstrap-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /><!--Link do estilo do site, utilizando Style.css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" type="image/x-icon"/><!--Favicon-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/wow/css/libs/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>