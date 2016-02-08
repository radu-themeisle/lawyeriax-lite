<?php
/**
 * The front page template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package qwertyuiop
 */

get_header(); ?>

	</div><!-- .container -->

	<?php 

		/* Slider section */
		qwertyuiop_slider_section();

		/* Ribbon section */
		qwertyuiop_ribbon_section();

		/* Features section */
		qwertyuiop_features_section();
		
		/* Lawyers section */
		qwertyuiop_lawyers_section();
		
		/* About us section */
		qwertyuiop_about_us_section();
		
		/* Latest news section */
		qwertyuiop_latest_news_section();

	?>





	<div class="container">
<?php
get_footer();
