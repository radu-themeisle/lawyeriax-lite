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
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';



	/********************************************************/
	/****************** Navbar Logo  ************************/
	/********************************************************/

	$wp_customize->add_setting('lawyeriax_navbar_logo', array(
        'default'           => get_template_directory_uri() . '/images/logo.png',
        'sanitize_callback' => 'esc_url'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lawyeriax_navbar_logo', array(
        'label'       => __('Website Logo', 'lawyeriax-lite'),
        'section'     => 'title_tagline',
        'priority'    => 5,
    )));


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
		'priority'                => 1,
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
			'label'       => __('Phone Number', 'lawyeriax-lite'),
			'section'     => 'lawyeriax_top_bar_section',
			'priority'    => 2,
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
			'sanitize_callback' => 'sanitize_repeater',
			'default'           => json_encode(array(
					array(
							'title'       => esc_html__('Meet Lawyeria', 'lawyeriax-lite'),
							'text'    		=> esc_html__('A WordPress theme for lawyers websites. Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.', 'lawyeriax-lite'),
							'subtitle'    => esc_html__('Request Legal Advice', 'lawyeriax-lite'),
							'link'				=> '#',
							'image_url' 	=> get_template_directory_uri() . '/images/slider/slider.jpg'
					),
					array(
							'title'       => esc_html__('Business Ready', 'lawyeriax-lite'),
							'text'    		=> esc_html__('A WordPress theme for lawyers websites. Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.', 'lawyeriax-lite'),
							'subtitle'    => esc_html__('Buy Now', 'lawyeriax-lite'),
							'link'				=> '#',
							'image_url' 	=> get_template_directory_uri() . '/images/slider/slider.jpg'
					),
					array(
							'title'       => esc_html__('Fully Responsive', 'lawyeriax-lite'),
							'text'   	 		=> esc_html__('A WordPress theme for lawyers websites. Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.', 'lawyeriax-lite'),
							'subtitle'    => esc_html__('More Themes', 'lawyeriax-lite'),
							'link'				=> '#',
							'image_url'		=> get_template_directory_uri() . '/images/slider/slider.jpg'
					),
				))));

	$wp_customize->add_control(new General_Repeater($wp_customize, 'lawyeriax_slider_content', array(
			'title' 											=> __('Slider Area', 'lawyeriax-lite'),
			'section'                 		=> 'lawyeria_slider_section',
			'priority'                		=> 1,
			'repeater_title_control'   		=> true,
			'repeater_subtitle_control'   => true,
			'repeater_text_control'   		=> true,
			'repeater_link_control'   		=> true,
			'repeater_image_control'   		=> true,
	)));


/********************************************************/
/******************* Ribbon Section *********************/
/********************************************************/

$wp_customize->add_section('lawyeriax_ribbon_section', array(
	'title' 				=> __('Ribbon Section', 'lawyeriax-lite'),
	'description' 	=> __('Ribbon tagline', 'lawyeriax-lite'),
	'priority'        => 32,
));

$wp_customize->add_setting('lawyeriax_ribbon_tagline', array(
		'default'           => esc_html__('The safety of the people shall be the highest law.', 'lawyeriax-lite'),
		'sanitize_callback' => 'lawyeriax_sanitize_text'
));
$wp_customize->add_control('lawyeriax_ribbon_tagline', array(
		'label'       => __('Ribbon Tagline', 'lawyeriax-lite'),
		'section'     => 'lawyeriax_ribbon_section',
		'priority'    => 1,
));


/********************************************************/
/******************* Features Section *******************/
/********************************************************/

$wp_customize->add_section('lawyeria_features_section', array(
		'description'		=> __('Edit, add or remove items from the front page features section', 'lawyeriax-lite'),
		'title' 				=> __('Features Area', 'lawyeriax-lite'),
		'priority' 			=> 33,
));

$wp_customize->add_setting('lawyeriax_features_content', array(
		'sanitize_callback' => 'sanitize_repeater',
		'default'           => json_encode(array(
				array(
						'title'       => esc_html__('Lorem ipsum', 'lawyeriax-lite'),
						'text'    		=> esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.', 'lawyeriax-lite'),
						'subtitle'    => esc_html__('Read more...', 'lawyeriax-lite'),
						'link'				=> '#',
						'icon_value'  => esc_html('fa-gavel')
				),

				array(
						'title'       => esc_html__('Lorem ipsum', 'lawyeriax-lite'),
						'text'    		=> esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.', 'lawyeriax-lite'),
						'subtitle'    => esc_html__('Read more...', 'lawyeriax-lite'),
						'link'				=> '#',
						'icon_value'  => esc_html('fa-gavel')
				),

				array(
						'title'       => esc_html__('Lorem ipsum', 'lawyeriax-lite'),
						'text'    		=> esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.', 'lawyeriax-lite'),
						'subtitle'    => esc_html__('Read more...', 'lawyeriax-lite'),
						'link'				=> '#',
						'icon_value'  => esc_html('fa-gavel')
				),

				array(
						'title'       => esc_html__('Lorem ipsum', 'lawyeriax-lite'),
						'text'    		=> esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.', 'lawyeriax-lite'),
						'subtitle'    => esc_html__('Read more...', 'lawyeriax-lite'),
						'link'				=> '#',
						'icon_value'  => esc_html('fa-gavel')
				),
			))));

$wp_customize->add_control(new General_Repeater($wp_customize, 'lawyeriax_features_content', array(
		'title' 											=> __('Features Area', 'lawyeriax-lite'),
		'section'                 		=> 'lawyeria_features_section',
		'priority'                		=> 1,
		'repeater_title_control'   		=> true,
		'repeater_text_control'   		=> true,
		'repeater_link_control'   		=> true,
		'repeater_subtitle_control'		=> true,
		'repeater_icon_control'   		=> true,
)));


/********************************************************/
/******************* Lawyers Section ********************/
/********************************************************/

$wp_customize->add_section('lawyeriax_lawyers_section', array(
	'title' 				=> __('Lawyers Section', 'lawyeriax-lite'),
	'description' 	=> __('Lawyers section settings', 'lawyeriax-lite'),
	'priority'        => 33,
));

$wp_customize->add_setting('lawyeriax_lawyers_heading', array(
		'default'           => esc_html__('Our Lawyers', 'lawyeriax-lite'),
		'sanitize_callback' => 'lawyeriax_sanitize_text'
));
$wp_customize->add_control('lawyeriax_lawyers_heading', array(
		'label'       => __('Section Heading', 'lawyeriax-lite'),
		'section'     => 'lawyeriax_lawyers_section',
		'priority'    => 1,
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
	About us Photo
=============================================================================*/

$wp_customize->add_setting('lawyeria_about_image', array(
			'default'           => get_template_directory_uri() . '/images/about-us.jpg',
			'sanitize_callback' => 'esc_url'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lawyeria_about_image', array(
			'label'       => __('Section image', 'lawyeriax-lite'),
			'section'     => 'lawyeriax_about_section',
			'priority'    => 1,
	)));

/*=============================================================================
	About us heading
=============================================================================*/

	$wp_customize->add_setting('lawyeriax_about_heading', array(
			'default'           => esc_html__('Choose the color that suits you for the following: Menu, Header, Footer and Frontpage boxes.', 'lawyeriax-lite'),
			'sanitize_callback' => 'lawyeriax_sanitize_text'
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
		'default'           => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nihil opus est exemplis hoc facere longius. Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est. Sed tu, ut dignum est tua erga me et philosophiam voluntate ab adolescentulo suscepta, fac ut Metrodori tueare liberos. Vitae autem degendae ratio maxime quidem illis placuit quieta. Quae si potest singula consolando levare, universa quo modo sustinebit? Ita fit beatae vitae domina fortuna, quam Epicurus ait exiguam intervenire sapienti. Duo Reges: constructio interrete. Epicurus ait exiguam intervenire sapienti. Duo Reges: constructio interrete.', 'lawyeriax-lite'),
		'sanitize_callback' => 'lawyeriax_sanitize_text'
));

$wp_customize->add_control('lawyeriax_about_text', array(
		'label'       => __('Heading', 'lawyeriax-lite'),
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
		'priority'      => 70,

));

$wp_customize->add_setting('news_heading', array(
			'default'           => esc_html__('Latest News', 'lawyeriax-lite'),
			'sanitize_callback' => 'lawyeriax_sanitize_text'
	));

$wp_customize->add_control('news_heading', array(
		'label'       => __('Section Heading', 'lawyeriax-lite'),
		'section'     => 'lawyeriax_news_section',
		'priority'    => 1,
));
}
add_action( 'customize_register', 'lawyeriax_lite_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lawyeriax_lite_customize_preview_js() {
	wp_enqueue_script( 'lawyeriax_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'lawyeriax_lite_customize_preview_js' );


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
