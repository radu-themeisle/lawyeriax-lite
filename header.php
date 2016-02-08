<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qwertyuiop
 */

$phone_number = get_theme_mod('lawyeriax_top_bar_phone_number', '+1-888-846173');
$email_address = get_theme_mod('lawyeriax_top_bar_email_address', 'example@themeisle.com');
$social_icons = get_theme_mod ('lawyeriax_top_bar_social_icons', json_encode(array(
		 array(
				 'icon_value'  => 'fa-facebook-square',
				 'link'				=> '#'
		 ),
		 array(
				 'icon_value'  => 'fa-twitter-square',
				 'link'				=> '#'
		 ),
		 array(
				 'icon_value'  => 'fa-linkedin-square',
				 'link'				=> '#'
		 ),
		 array(
				 'icon_value'  => 'fa-google-plus-square',
				 'link'				=> '#'
		 ),
		 array(
				 'icon_value'  => 'fa-rss-square',
				 'link'				=> '#'
		 )
 )));

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lawyeriax-lite' ); ?></a>
	<section id="top-bar">
		<div class="row">
			<div class="container">
				<?php
				if(!empty($social_icons)) {
					$social_icons_decoded = json_decode($social_icons);
					if(!empty($social_icons_decoded)) {
						foreach($social_icons_decoded as $icon) {
							echo '<a href="' . esc_url( $icon->link) . '"><i class="fa ' .$icon->icon_value. '"></i></a>';
						}
					}
				}
			?>
      <p>
        <i class="fa fa-phone-square"></i><?php echo esc_html($phone_number); ?>
        <i class="fa fa-envelope-square"></i><?php echo esc_html($email_address); ?>

      </p>
			</div> <!-- container -->
		</div> <!-- row -->
	</section>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lawyeriax-lite' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
