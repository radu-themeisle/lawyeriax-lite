<?php
/**
 * The front page template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lawyeriax-lite
 */

get_header(); ?>

	</div><!-- .container -->

	<?php 

		/* Slider section */
		lawyeriax_lite_slider_section();

		/* Ribbon section */
		lawyeriax_lite_ribbon_section();

		/* Features section */
		lawyeriax_lite_features_section();
		
		/* Lawyers section */
		lawyeriax_lite_lawyers_section();
		
		/* About us section */
		lawyeriax_lite_about_us_section();
		
		/* Latest news section */
		lawyeriax_lite_latest_news_section();

	?>





	<div class="container">
<?php
get_footer();
