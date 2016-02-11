<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lawyeriax-lite
 */

$phone_number = get_theme_mod('lawyeriax_top_bar_phone_number', '+1-888-846173');
$email_address = get_theme_mod('lawyeriax_top_bar_email_address', 'example@themeisle.com');
$social_icons = get_theme_mod ('lawyeriax_top_bar_social_icons', json_encode(array(
		 array(
				 'icon_value'	=> 'fa-facebook-square',
				 'link'			=> '#'
		 ),
		 array(
				 'icon_value' 	=> 'fa-twitter-square',
				 'link' 		=> '#'
		 ),
		 array(
				 'icon_value' 	=> 'fa-linkedin-square',
				 'link' 		=> '#'
		 ),
		 array(
				 'icon_value' 	=> 'fa-google-plus-square',
				 'link' 		=> '#'
		 ),
		 array(
				 'icon_value' 	=> 'fa-rss-square',
				 'link' 		=> '#'
		 )
 )));

$website_logo = get_theme_mod('lawyeriax_navbar_logo', get_template_directory_uri() . '/images/logo.png')

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

	<header id="masthead" class="site-header" role="banner">


<div class="navbar navbar-main sticky-navigation navbar-fixed-top">

		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="top-bar-left top-bar-social">
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
				</div>
				<div class="top-bar-right top-bar-contact">
					<p><i class="fa fa-phone-square"></i><span><?php echo esc_html($phone_number); ?></span></p>
				    <p><i class="fa fa-envelope-square"></i><span><?php echo esc_html($email_address); ?></span></p>
				</div>
			</div> <!-- container -->
		</div>

		<div class="container container-header">
			<div class="header-inner">
				<div class="site-branding-wrap">
					<div class="site-branding">
						<?php
							if ( !empty ($website_logo) ) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php get_bloginfo('title'); ?>">
									<img src="<?php echo esc_url($website_logo); ?>" alt="<?php get_bloginfo( 'title' ); ?>"/>
								</a>
							<?php } else { ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						 <?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) { ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
					}} ?>
					</div><!-- .site-branding -->
				</div><!-- .site-branding-wrap -->

				<div class="main-navigation-wrap">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="fa fa-bars"></i>
							<span><?php esc_html_e( 'Primary Menu', 'lawyeriax-lite' ); ?></span>
						</button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div><!-- .header-inner -->
		</div><!-- .container -->

</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
