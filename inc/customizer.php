<?php
/**
 * lawyeriax-lite Theme Customizer.
 *
 * @package lawyeriax-lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lawyeriax_lite_customize_register( $wp_customize ) {

	/**
	 * Add repeater PHP and template controler.
	 */
	require_once ( 'class/repeater-general-control.php');

	require_once ( 'class/lawyeriax-lite-template-control.php');

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	//Remove unused sections
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );


/********************************************************/
/***************** TOP BAR AREA  ************************/
/********************************************************/

$wp_customize->add_section('lawyeriax_top_bar_section', array(
	'title' 				=> __('Top Bar', 'lawyeriax-lite'),
	'description' 	=> __('Top Bar Content', 'lawyeriax-lite'),
	'priority'        => 30,
));


/*=============================================================================
		Social icons
=============================================================================*/
$wp_customize->add_setting('lawyeriax_top_bar_social_icons', array(
		'sanitize_callback' => 'lawyeriax_lite_sanitize_repeater',
));

$wp_customize->add_control(new LawyeriaX_General_Repeater($wp_customize, 'lawyeriax_top_bar_social_icons', array(
		'label'                   => __('Social Links', 'lawyeriax-lite'),
		'description'             => __('Edit, add or remove social links from the top bar', 'lawyeriax-lite'),
		'section'                 => 'lawyeriax_top_bar_section',
		'priority'                => 1,
		'lawyeriax_icon_control'   => true,
		'lawyeriax_link_control'   => true,
)));

/*=============================================================================
	Phone number
=============================================================================*/

	$wp_customize->add_setting('lawyeriax_top_bar_phone_number', array(
			'sanitize_callback' => 'lawyeriax_lite_sanitize_text',
	));

	$wp_customize->add_control('lawyeriax_top_bar_phone_number', array(
			'label'       => __('Phone Number', 'lawyeriax-lite'),
			'section'     => 'lawyeriax_top_bar_section',
			'priority'    => 2,
	));

/*=============================================================================
Email address
=============================================================================*/

	$wp_customize->add_setting('lawyeriax_top_bar_email_address', array(
			'sanitize_callback' => 'lawyeriax_lite_sanitize_text'
	));
	$wp_customize->add_control('lawyeriax_top_bar_email_address', array(
			'label'       => __('Email Address', 'lawyeriax-lite'),
			'section'     => 'lawyeriax_top_bar_section',
			'priority'    => 3,
	));


/********************************************************/
/******************* Slider Section *********************/
/********************************************************/

	$wp_customize->add_section('lawyeria_slider_section', array(
			'description'		=> __('Edit, add or remove slides from the front page hero area', 'lawyeriax-lite'),
			'title' 				=> __('Slider Area', 'lawyeriax-lite'),
			'priority' 			=> 31,
	));

	$wp_customize->add_setting('lawyeriax_slider_content', array(
			'sanitize_callback' => 'lawyeriax_lite_sanitize_repeater',
			'default'           => json_encode(array(
					array(
		          'title'      => esc_html__('Meet Lawyeria', 'lawyeriax-lite'),
		          'text'       => esc_html__('A WordPress theme for lawyer websites. Show everyone who you are, introduce your team, your activities, and what customers say about you. Your strengths need to be known by everybody.', 'lawyeriax-lite'),
		          'subtitle'   => esc_html__('Request Legal Advice', 'lawyeriax-lite'),
		          'link'				=> '#',
		          'image_url'	=> get_template_directory_uri() . '/images/slider0.jpg'
		      ),
		      array(
		          'title'      => esc_html__('Fully Responsive', 'lawyeriax-lite'),
		          'text'       => esc_html__('Lawyeria will look incredibly well on all devices, as it was made to fit any mobile screen. Its beautiful design and the way your content looks will not be affected by the device you use. They will remain just the same as on desktop.', 'lawyeriax-lite'),
		          'subtitle'   => esc_html__('Buy Now', 'lawyeriax-lite'),
		          'link'				=> esc_url('#'),
		          'image_url'	=> get_template_directory_uri() . '/images/slider1.jpg'
		      ),
		      array(
		          'title'      => esc_html__('Business Ready', 'lawyeriax-lite'),
		          'text'       => esc_html__('A business-oriented theme that provides a professional and clean design, made to build trust between you and your clients. It will put your professional purposes in the spotlight, promote your best skills in a modern way, and help you increase the number of your clients.', 'lawyeriax-lite'),
		          'subtitle'   => esc_html__('More Themes', 'lawyeriax-lite'),
		          'link'				=> esc_url('#'),
		          'image_url'	=> get_template_directory_uri() . '/images/slider2.jpg'
		      ),
				))));

	$wp_customize->add_control(new LawyeriaX_General_Repeater($wp_customize, 'lawyeriax_slider_content', array(
			'label' 											=> __('Slider Area', 'lawyeriax-lite'),
			'section'                 		=> 'lawyeria_slider_section',
			'priority'                		=> 1,
			'lawyeriax_title_control' 		=> true,
			'lawyeriax_subtitle_control'	=> true,
			'lawyeriax_text_control'  		=> true,
			'lawyeriax_link_control'  		=> true,
			'lawyeriax_image_control'			=> true,
	)));


/********************************************************/
/******************* Ribbon Section *********************/
/********************************************************/

$wp_customize->add_section('lawyeriax_ribbon_section', array(
	'title' 				=> __('Ribbon Section', 'lawyeriax-lite'),
	'priority'      => 32,
));

$wp_customize->add_setting('lawyeriax_ribbon_tagline', array(
		'default'           => esc_html__('The safety of the people shall be the highest law.', 'lawyeriax-lite'),
		'sanitize_callback' => 'lawyeriax_lite_sanitize_text',
		'transport'					=> 'postMessage',
));
$wp_customize->add_control('lawyeriax_ribbon_tagline', array(
		'label'       => __('Ribbon Text', 'lawyeriax-lite'),
		'section'     => 'lawyeriax_ribbon_section',
		'priority'    => 1,
));


/********************************************************/
/******************* Features Section *******************/
/********************************************************/

$wp_customize->add_section('lawyeria_features_section', array(
		'description'		=> __('Select pages that should be added to the section. ', 'lawyeriax-lite'),
		'title' 				=> __('Features Area', 'lawyeriax-lite'),
		'priority' 			=> 33,
));

// Pages Drop Downs
//First
$wp_customize->add_setting('first_feature_box', array(
	  'capability'  => 'edit_theme_options',
		'sanitize_callback' => 'absint',
	));

$wp_customize->add_control('first_feature_box', array(
	  'label' 			=> __( 'First Panel', 'lawyeriax-lite' ),
	  'section' 		=> 'lawyeria_features_section',
		'type' 				=> 'dropdown-pages',
	));

//Second
$wp_customize->add_setting('second_feature_box', array(
	  'capability'  => 'edit_theme_options',
		'sanitize_callback' => 'absint',
	));

$wp_customize->add_control('second_feature_box', array(
	  'label' 			=> __( 'Second Panel', 'lawyeriax-lite' ),
	  'section' 		=> 'lawyeria_features_section',
		'type' 				=> 'dropdown-pages',
	));

//Third
$wp_customize->add_setting('third_feature_box', array(
	  'capability'  => 'edit_theme_options',
		'sanitize_callback' => 'absint',
	));

$wp_customize->add_control('third_feature_box', array(
	  'label' 			=> __( 'Third Panel', 'lawyeriax-lite' ),
	  'section' 		=> 'lawyeria_features_section',
		'type' 				=> 'dropdown-pages',
	));

//Fourth
$wp_customize->add_setting('fourth_feature_box', array(
	  'capability'  => 'edit_theme_options',
		'sanitize_callback' => 'absint',
	));

$wp_customize->add_control('fourth_feature_box', array(
	  'label' 			=> __( 'Fourth Panel', 'lawyeriax-lite' ),
	  'section' 		=> 'lawyeria_features_section',
		'type' 				=> 'dropdown-pages',
	));

/********************************************************/
/******************* About us Section *******************/
/********************************************************/

$wp_customize->add_section('lawyeriax_about_section', array(
	'title' 				=> __('About us Section', 'lawyeriax-lite'),
	'description' 	=> __('About us section settings', 'lawyeriax-lite'),
	'priority'        => 34,
));

/*=============================================================================
	About us Image
=============================================================================*/

$wp_customize->add_setting('lawyeria_about_image', array(
			'default'           => get_template_directory_uri() . '/images/about-us.jpg',
			'sanitize_callback' => 'esc_url'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lawyeria_about_image', array(
			'label'       => __('Image', 'lawyeriax-lite'),
			'section'     => 'lawyeriax_about_section',
			'priority'    => 1,
	)));

/*=============================================================================
	About us heading
=============================================================================*/

	$wp_customize->add_setting('lawyeriax_about_heading', array(
			'default'           => esc_html__('About us.', 'lawyeriax-lite'),
			'sanitize_callback' => 'lawyeriax_lite_sanitize_text',
			'transport'					=> 'postMessage',
	));

	$wp_customize->add_control('lawyeriax_about_heading', array(
			'label'       => __('Heading', 'lawyeriax-lite'),
			'section'     => 'lawyeriax_about_section',
			'priority'    => 2,
	));

/*=============================================================================
	About us text
=============================================================================*/

$wp_customize->add_setting('lawyeriax_about_text', array(
		'default'           => esc_html__('Use this section to tell a story about your business. Everything you see here is responsive and mobile-friendly - it will look great on smartphones and tablets.', 'lawyeriax-lite'),
		'sanitize_callback' => 'lawyeriax_lite_sanitize_text',
		'transport'					=> 'postMessage',
));

$wp_customize->add_control('lawyeriax_about_text', array(
		'label'       => __('Text', 'lawyeriax-lite'),
		'section'     => 'lawyeriax_about_section',
		'type'				=> 'textarea',
		'priority'    => 3,
));

/********************************************************/
/******************* News Section ***********************/
/********************************************************/

$wp_customize->add_section('lawyeriax_news_section', array(
		'title' 				=> __('Latest News', 'lawyeriax-lite'),
		'description' 	=> __('Latest News Content', 'lawyeriax-lite'),
		'priority'      => 35,
));

/*=============================================================================
	Heading
=============================================================================*/

$wp_customize->add_setting('news_heading', array(
			'default'           => esc_html__('Latest News', 'lawyeriax-lite'),
			'sanitize_callback' => 'lawyeriax_lite_sanitize_text',
			'transport'					=> 'postMessage',
	));

$wp_customize->add_control('news_heading', array(
		'label'       => __('Section Heading', 'lawyeriax-lite'),
		'section'     => 'lawyeriax_news_section',
		'priority'    => 1,
));

/* Control for choosing template for the frontpage */
/*****************************************************************/
/**********	Control for choosing a template for the frontpage ****/
/*****************************************************************/

	$wp_customize->remove_control('page_on_front');

	$wp_customize->add_control(new LawyeriaX_Lite_Frontpage_Templates($wp_customize, 'page_on_front',array(
			'label'    => __( 'Front page', 'lawyeriax-lite' ),
			'section' => 'static_front_page',
			'priority' => 10
	)));

	$lawyeriax_lite_page_for_posts = $wp_customize->get_control('page_for_posts');
	if(!empty($lawyeriax_lite_page_for_posts)):
		$lawyeriax_lite_page_for_posts->priority = 11;
	endif;
	/**********************/

$lawyeriax_lite_templates = get_page_templates();

if( !empty($lawyeriax_lite_templates) ):

	$lawyeriax_lite_templates_reversed = array_flip($lawyeriax_lite_templates);
	$lawyeriax_lite_templates_reversed['default'] = 'Default';

	$wp_customize->add_setting( 'lawyeriax_lite_frontpage_template_static', array(
		'default' => esc_html__('Frontpage template','lawyeriax-lite'),
		'sanitize_callback' => 'lawyeriax_lite_sanitize_text',
		// 'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'lawyeriax_lite_frontpage_template_static', array(
		'type' => 'select',
		'label'    => esc_html__( 'Frontpage template', 'lawyeriax-lite' ),
		'section'  => 'static_front_page',
		'choices' => $lawyeriax_lite_templates_reversed,
		'priority'    => 12
	));
endif;

}
add_action( 'customize_register', 'lawyeriax_lite_customize_register' );


function lawyeriax_lite_custom_header() {
	add_theme_support( 'custom-header', apply_filters( 'twentysixteen_custom_header_args', array(
		'wp-head-callback'       => 'lawyeriax_lite_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'lawyeriax_lite_custom_header' );


function lawyeriax_lite_header_style() {
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}

	// If the header text has been hidden.
	?>
	<style type="text/css" id="twentysixteen-header-css">
		.site-branding {
			margin: 0 auto 0 0;
		}

		.site-branding .site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	</style>
	<?php
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lawyeriax_lite_customize_preview_js() {

	wp_enqueue_script( 'lawyeriax_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'lawyeriax_lite_customize_preview_js', 10 );




/**
 * Sanitize text.
 */
 function lawyeriax_lite_sanitize_text($input)
{
    return wp_kses_post(force_balance_tags($input));
}

/**
 * Sanitize repeater.
 */
 function lawyeriax_lite_sanitize_repeater($input){

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


 	if(!empty($input_decoded)) {
 		foreach ($input_decoded as $boxk => $box ){
 			foreach ($box as $key => $value){
 				if (($key == 'text') || ($key == 'title') || ($key == 'subtitle')){
 					$value = html_entity_decode($value);
 					$input_decoded[$boxk][$key] = wp_kses( $value, $allowed_html);
 				} else {
 					$input_decoded[$boxk][$key] = wp_kses_post( force_balance_tags( $value ) );
 				}
 			}
 		}
 		return json_encode($input_decoded);
 	}

 	return $input;
 }

 function lawyeriax_lite_show_on_front(){
	return is_page_template('template-frontpage.php');
}
