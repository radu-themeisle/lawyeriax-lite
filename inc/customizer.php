<?php
/**
 * qwertyuiop Theme Customizer.
 *
 * @package qwertyuiop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function qwertyuiop_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/********************************************************/
	/************** PRE-NAVBAR AREA  ************************/
	/********************************************************/

	$wp_customize->add_panel('lawyeriax_top_bar_panel', array(
			'priority'        => 30,
			'capability'      => 'edit_theme_options',
			'theme_supports'  => '',
			'title'           => __('Top Bar', 'lawyeriax_lite'),
			'description'     => __('Customize the appearance of the front page sections', 'lawyeriax_lite')
	));

	$wp_customize->add_section('lawyeriax_top_bar_section', array(
			'title' 				=> __('Social Icons', 'lawyeriax-lite'),
			'priority' 			=> "1",
			'description' 	=> __('Top Bar Content', 'lawyeriax_lite'),
			'panel'					=> 'lawyeriax_top_bar_panel'
	));

/*=============================================================================
		Social icons
=============================================================================*/

$wp_customize->add_setting('lawyeriax_top_bar_social_icons', array(
		'sanitize_callback' => 'sanitize_repeater',
		'default'           => json_encode(array(
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
		))
));

$wp_customize->add_control(new General_Repeater($wp_customize, 'lawyeriax_top_bar_social_icons', array(
		'label'                   => __('Social Links', 'lawyeriax-lite'),
		'description'             => __('Edit, add or remove social links from the top bar', 'lawyeriax-lite'),
		'section'                 => 'lawyeriax_top_bar_section',
		'priority'                => '1',
		'repeater_icon_control'   => true,
		'repeater_link_control'   => true,
)));

/*=============================================================================
	Phone number
=============================================================================*/

	$wp_customize->add_setting('lawyeriax_top_bar_phone_number', array(
			'default'           => esc_html__('+1-888-846173', 'lawyeriax-lite'),
			'sanitize_callback' => 'lawyeriax_sanitize_text'
	));

	$wp_customize->add_control('lawyeriax_top_bar_phone_number', array(
			'label'       => __('Phone Number', 'aza-lite'),
			'section'     => 'lawyeriax_top_bar_section',
			'priority'    => '2',
	));

	/*=============================================================================
	Email address
	=============================================================================*/

	$wp_customize->add_setting('lawyeriax_top_bar_email_address', array(
			'default'           => esc_html__('example@themeisle.com', 'lawyeriax-lite'),
			'sanitize_callback' => 'lawyeriax_sanitize_text'
	));
	$wp_customize->add_control('lawyeriax_top_bar_email_address', array(
			'label'       => __('Email Address', 'lawyeriax-lite'),
			'section'     => 'lawyeriax_top_bar_section',
			'priority'    => '3',
	));



}
add_action( 'customize_register', 'qwertyuiop_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function qwertyuiop_customize_preview_js() {
	wp_enqueue_script( 'qwertyuiop_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'qwertyuiop_customize_preview_js' );


/**
 * Add repeater PHP and enqueue repeater JS.
 */
require_once ( 'class/repeater-general-control.php');




/**
 * Sanitize text.
 */
 function lawyeriax_sanitize_text($input)
{
    return wp_kses_post(force_balance_tags($input));
}

/**
 * Sanitize repeater.
 */
 function sanitize_repeater($input){
	$input_decoded = json_decode($input,true);
	$allowed_html = array(
								'br' => array(),
								'em' => array(),
								'strong' => array(),
								'a' => array(
									'href' => array(),
									'class' => array(),
									'id' => array(),
									'target' => array()
								),
								'button' => array(
									'class' => array(),
									'id' => array()
								)
							);
	foreach ($input_decoded as $boxk => $box ){
		foreach ($box as $key => $value){
			if ($key == 'text'){
				$input_decoded[$boxk][$key] = wp_kses($value, $allowed_html);

			} else {
				$input_decoded[$boxk][$key] = wp_kses_post( force_balance_tags( $value ) );
			}
		}}
	return json_encode($input_decoded);
}
