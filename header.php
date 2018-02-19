<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greybot
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Courgette%7CNews+Cycle" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'greybot' ); ?></a>

	<header id="masthead" class="site-header row">
		<div class="site-branding col-lg-3 col-md-12 ">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> 
			<div id=logo>
				<span class=grey>
					G<span class=sm>rey</span>
					</span>
					<span class=mcgowan>
					M<span class=sm>c</span>g<span class=sm>owan</span>
				</span>
			</div>	
				</a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<div id=logo> 
					<span class=grey>
						G<span class=sm>rey</span>
					</span>
					<span class=mcgowan>
						M<span class=sm>c</span>g<span class=sm>owan</span>
					</span>
				</div>
				</a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-lg-6 col-md-12">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
		<div id=search class='search col-lg-3 col-md-12'>
		<?php get_search_form(); ?>
		</div>	
	</header><!-- #masthead -->
	<div id="content" class="site-content">
