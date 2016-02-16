<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div style="overflow-x:hidden !important;">
	<?php do_action( 'before' ); ?>
    <nav id="menu" role="navigation">
        <div class="brand">MENU</div>
        <?php get_sidebar('2'); ?>           
        <!-- The WordPress Menu goes here -->
					<!-- ?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => '',
							'menu_class' 		=> '',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'slide-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ? -->
    </nav>
    <div class="main-content page-wrap">
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
					<div>
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button id="menu-toggle" type="button" class="navbar-toggle" style="float:left;display:initial !important;border-radius:0;">
							<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
	
						<!-- Your site title as branding in the menu -->
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>

					

	</div><!-- .container -->
</nav><!-- .site-navigation -->



<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container blog-wrap" style="margin-top:50px;">
			<div id="content" class="main-content-inner">

