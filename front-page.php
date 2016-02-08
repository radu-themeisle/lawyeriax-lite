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
	<section id="slider" class="header-slider">


		<div id="main-slider" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>


			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider/slider.jpg" alt="Lorem ipsum">
					<div class="carousel-caption">
						<div class="container">
							<p class="carousel-title">Meet Lawyeria</p>
							<p class="carousel-content">A WordPress theme for lawyers websites.Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.</p>
							<a href="#" title="Title">Request Legal Advice</a>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider/slider.jpg" alt="Lorem ipsum">
					<div class="carousel-caption">
						<div class="container">
							<p class="carousel-title">Meet Lawyeria</p>
							<p class="carousel-content">A WordPress theme for lawyers websites.Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.</p>
							<a href="#" title="Title">Request Legal Advice</a>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider/slider.jpg" alt="Lorem ipsum">
					<div class="carousel-caption">
						<div class="container">
							<p class="carousel-title">Meet Lawyeria</p>
							<p class="carousel-content">A WordPress theme for lawyers websites.Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.</p>
							<a href="#" title="Title">Request Legal Advice</a>
						</div>
					</div>
				</div>
			</div>


			<a class="left carousel-control" href="#main-slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#main-slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>







	</section><!-- #slider -->


	<?php 

		qwertyuiop_ribbon_section();
		qwertyuiop_features_section();
		qwertyuiop_about_us_section();
		qwertyuiop_latest_news_section();

	?>





	<div class="container">
<?php
get_footer();
