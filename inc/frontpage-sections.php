<?php

$news_heading = get_theme_mod('news_section_heading', esc_html__('Latest News','lawyeriax-lite'));

/*
 * Frontpage sections
 */



if ( ! function_exists( 'qwertyuiop_ribbon_section' ) ) :
/**
 * Ribbon sections
 */
function qwertyuiop_ribbon_section() {
	?>

	<section id="ribbon" class="home-section ribbon">
		<div class="container">

			<div class="home-section-inner">
				<p class="ribbon-big-title">The safety of the people shall be the highest law.</p>
			</div>

			<div class="col-md-10 col-md-offset-1 section-line"></div>
		</div><!-- .container -->
	</section>

	<?php
}
endif;



if ( ! function_exists( 'qwertyuiop_features_section' ) ) :
/**
 * Features sections
 */
function qwertyuiop_features_section() {
	?>

	<section id="features" class="features">
		<div class="container">
			<div class="home-section-inner feature-boxes-wrap">

				<div class="col-xs-12 col-sm-6 col-md-3 feature-box">
					<div class="features-title">
						<span class="features-title-icon"></span>
						<div class="feature-title-wrap">
							<h3 class="feature-title">Lorem ipsum</h3>
						</div>
					</div>
					<div class="border-left features-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.</p>
						<a href="#" title="Read more" class="read-more">Read more...</a>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3 feature-box">
					<div class="features-title">
						<span class="features-title-icon"></span>
						<div class="feature-title-wrap">
							<h3 class="feature-title">Lorem ipsum</h3>
						</div>
					</div>
					<div class="border-left  features-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.</p>
						<a href="#" title="Read more" class="read-more">Read more...</a>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3 feature-box">
					<div class="features-title">
						<span class="features-title-icon"></span>
						<div class="feature-title-wrap">
							<h3 class="feature-title">Lorem ipsum dolor cuculor modor</h3>
						</div>
					</div>
					<div class="border-left features-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.</p>
						<a href="#" title="Read more" class="read-more">Read more...</a>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3 feature-box">
					<div class="features-title">
						<span class="features-title-icon"></span>
						<div class="feature-title-wrap">
							<h3 class="feature-title">Lorem ipsum</h3>
						</div>
					</div>
					<div class="border-left features-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.</p>
						<a href="#" title="Read more" class="read-more">Read more...</a>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3 feature-box">
					<div class="features-title">
						<span class="features-title-icon"></span>
						<div class="feature-title-wrap">
							<h3 class="feature-title">Lorem ipsum</h3>
						</div>
					</div>
					<div class="border-left features-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.</p>
						<a href="#" title="Read more" class="read-more">Read more...</a>
					</div>
				</div>

			</div>
			<div class="col-md-10 col-md-offset-1 section-line"></div>
		</div><!-- .container -->
	</section>


	<?php
}
endif;



if ( ! function_exists( 'qwertyuiop_about_us_section' ) ) :
/**
 * About us sections
 */
function qwertyuiop_about_us_section() {
	?>

	<section id="about" class="home-section about">
		<div class="container">

			<div class="home-section-inner">


				<div class="col-sm-5 about-image-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/images/about-us.jpg" alt="Alt frate">
				</div>
				<div class="col-sm-7 about-content-wrap">
					<h3 class="about-title">Choose the color that suits you for the following: Menu, Header, Footer and Frontpage boxes.</h3>
					<div class="border-left about-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nihil opus est exemplis hoc facere longius. Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est. Sed tu, ut dignum est tua erga me et philosophiam voluntate ab adolescentulo suscepta, fac ut Metrodori tueare liberos. </p>
						<p>Vitae autem degendae ratio maxime quidem illis placuit quieta. Quae si potest singula consolando levare, universa quo modo sustinebit? Ita fit beatae vitae domina fortuna, quam Epicurus ait exiguam intervenire sapienti. Duo Reges: constructio interrete. Epicurus ait exiguam intervenire sapienti. Duo Reges: constructio interrete.</p>
					</div>
				</div>


			</div>

			<div class="col-md-10 col-md-offset-1 section-line"></div>
		</div><!-- .container -->
	</section>

	<?php
}
endif;



if ( ! function_exists( 'qwertyuiop_latest_news_section' ) ) :
/**
 * Latest news section
 */
function qwertyuiop_latest_news_section() {
	global $news_heading;
	global $news_section_posts_number_real;
	?>

	<section id="news" class="home-section news">
		<div class="container">

			<div class="home-section-title-wrap">
				<?php
					if(!empty($heading)) {
						echo '<h2 class="home-section-title">'. $heading .'</h2>';
					}
				 ?>
			</div>

			<div class="home-section-inner latest-news">
				<!-- Posts Loop -->
				<?php
				if ( have_posts() ) : query_posts("showposts= 2" );
					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif;
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content-home-single', get_post_format() );
					endwhile;
				else :
					get_template_part( 'template-parts/content', 'none' );
					wp_reset_query();
				endif; ?>
			</div>

			<div class="col-md-10 col-md-offset-1 section-line"></div>
			</div><!-- .container -->
	</section>

	<?php
}
endif;
