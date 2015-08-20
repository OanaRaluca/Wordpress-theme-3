<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Nu Themes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php wp_title( '-', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php do_action( 'before' ); ?>
		<header id="site-header" class="container site-header" role="banner">
			<div class="site-branding">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</<?php echo $heading_tag; ?>>
				<div class="site-description"><?php bloginfo( 'description' ); ?></div>
			<!-- .site-branding --></div>

			<div id="site-navigation" class="navbar navbar-default site-navigation" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<?php
					wp_nav_menu( array(
						'theme_location'	=> 'primary',
						'depth'				=> 2,
						'menu_class'		=> 'nav navbar-nav',
						'container_class'	=> 'navbar-collapse collapse main-navigation',
						'fallback_cb'		=> 'nuthemes_bootstrap_navwalker::fallback',
						'walker'			=> new nuthemes_bootstrap_navwalker()
					) );
				?>
			<!-- #site-navigation --></div>
		<!-- #site-header --></header>

		<div id="main" class="container site-main">
			<div class="main-inner">
