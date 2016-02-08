<?php

/*
 * Frontpage sections
 */




if ( ! function_exists( 'qwertyuiop_slider_section' ) ) :
/**
 * Ribbon sections
 */
function qwertyuiop_slider_section() {	
	?>

	<section id="slider" class="header-slider">

		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="item-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slider/slider.jpg?>);">
						<div class="carousel-caption">
							<div class="container">
								<p class="col-md-8 carousel-title">Meet Lawyeria</p>
								<p class="col-md-8 carousel-content">A WordPress theme for lawyers websites.Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.</p>
								<p class="col-md-8 carousel-button"><a href="#" class="slider-button" title="Title">Request Legal Advice</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="item-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slider/slider.jpg?>);">
						<div class="carousel-caption">
							<div class="container">
								<p class="col-md-8 carousel-title">Meet Lawyeria</p>
								<p class="col-md-8 carousel-content">A WordPress theme for lawyers websites.Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.</p>
								<p class="col-md-8 carousel-button"><a href="#" class="slider-button" title="Title">Request Legal Advice</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="item-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slider/slider.jpg?>);">
						<div class="carousel-caption">
							<div class="container">
								<p class="col-md-8 carousel-title">Meet Lawyeria</p>
								<p class="col-md-8 carousel-content">A WordPress theme for lawyers websites.Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.</p>
								<p class="col-md-8 carousel-button"><a href="#" class="slider-button" title="Title">Request Legal Advice</a></p>
							</div>
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
}
endif;



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



if ( ! function_exists( 'qwertyuiop_lawyers_section' ) ) :
/**
 * Ribbon sections
 */
function qwertyuiop_lawyers_section() {	
	?>

	<section id="lawyer" class="home-section lawyer">
		<div class="container">

			<div class="home-section-title-wrap">
				<h2 class="home-section-title">Our Lawyers</h2>
			</div>

			<div class="home-section-inner lawyer-box-wrap">

				<div class="col-xs-12 col-sm-4 lawyer-box">
					<div class="lawyer-box-image">
						<a href="#" title="Eu Doris Pavel">
							<img src="<?php echo get_template_directory_uri(); ?>/images/lawyer1.jpg" alt="Mare lawyer frate">
						</a>
					</div>
					<div class="lawyer-box-content">
						<h5 class="lawyer-title">
							<a href="#" title="Marele Doris">Doris Patel</a>
						</h5>
						<div class="border-left lawyer-box-content-inner">
							<div class="lawyer-box-inside">
								<p class="lawyer-box-info">Litigation</p>
								<ul class="lawyer-media-icons">
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
								</ul>
							</div>
							<a href="#" class="view-profile" title="View Profile">View Profile</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 lawyer-box">
					<div class="lawyer-box-image">
						<a href="#" title="Eu Doris Pavel">
							<img src="<?php echo get_template_directory_uri(); ?>/images/lawyer1.jpg" alt="Mare lawyer frate">
						</a>
					</div>
					<div class="lawyer-box-content">
						<h5 class="lawyer-title">
							<a href="#" title="Marele Doris">Doris Patel</a>
						</h5>
						<div class="border-left lawyer-box-content-inner">
							<div class="lawyer-box-inside">
								<p class="lawyer-box-info">Litigation</p>
								<ul class="lawyer-media-icons">
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
								</ul>
							</div>
							<a href="#" class="view-profile" title="View Profile">View Profile</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 lawyer-box">
					<div class="lawyer-box-image">
						<a href="#" title="Eu Doris Pavel">
							<img src="<?php echo get_template_directory_uri(); ?>/images/lawyer1.jpg" alt="Mare lawyer frate">
						</a>
					</div>
					<div class="lawyer-box-content">
						<h5 class="lawyer-title">
							<a href="#" title="Marele Doris">Doris Patel</a>
						</h5>
						<div class="border-left lawyer-box-content-inner">
							<div class="lawyer-box-inside">
								<p class="lawyer-box-info">Litigation</p>
								<ul class="lawyer-media-icons">
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
								</ul>
							</div>
							<a href="#" class="view-profile" title="View Profile">View Profile</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 lawyer-box">
					<div class="lawyer-box-image">
						<a href="#" title="Eu Doris Pavel">
							<img src="<?php echo get_template_directory_uri(); ?>/images/lawyer1.jpg" alt="Mare lawyer frate">
						</a>
					</div>
					<div class="lawyer-box-content">
						<h5 class="lawyer-title">
							<a href="#" title="Marele Doris">Doris Patel</a>
						</h5>
						<div class="border-left lawyer-box-content-inner">
							<div class="lawyer-box-inside">
								<p class="lawyer-box-info">Litigation</p>
								<ul class="lawyer-media-icons">
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
								</ul>
							</div>
							<a href="#" class="view-profile" title="View Profile">View Profile</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-4 lawyer-box">
					<div class="lawyer-box-image">
						<a href="#" title="Eu Doris Pavel">
							<img src="<?php echo get_template_directory_uri(); ?>/images/lawyer1.jpg" alt="Mare lawyer frate">
						</a>
					</div>
					<div class="lawyer-box-content">
						<h5 class="lawyer-title">
							<a href="#" title="Marele Doris">Doris Patel</a>
						</h5>
						<div class="border-left lawyer-box-content-inner">
							<div class="lawyer-box-inside">
								<p class="lawyer-box-info">Litigation</p>
								<ul class="lawyer-media-icons">
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
									<li><a href="#" class="fb"><img src="<?php echo get_template_directory_uri(); ?>/images//fb.jpg"></a></li>
								</ul>
							</div>
							<a href="#" class="view-profile" title="View Profile">View Profile</a>
						</div>
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
	?>

	<section id="news" class="home-section news">
		<div class="container">

			<div class="home-section-title-wrap">
				<h2 class="home-section-title">Latest news</h2>
			</div>

			<div class="home-section-inner latest-news">

				<div class="col-md-4 news-box">
					<div class="news-title-wrap">
						<div class="news-date">
							<span>25</span>
							<span>Jan</span>
						</div>
						<div class="news-post-title-wrap">
							<h4 class="news-post-title">
								<a href="#" title="Hmm">Sed quid sentiat, non videtis.</a>
							</h4>
						</div>
						<div class="news-posted-on">
							<a href="#" title="codeinwp">codeinwp</a>
							<a href="#" title="14 comments">14 comments</a>
						</div>
					</div>
					<div class="news-img-wrap">
						<a href="#" title="Title fratele meu">
							<img src="<?php echo get_template_directory_uri(); ?>/images/img-blog.jpg" alt="Alt alt frate">
						</a>
					</div>
					<div class="border-left news-content-wrap">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eo enim positum est id, quod dicimus esse expetendum. At, illa, ut vobis placet, partem quandam tuetur, reliquam deserit. O magnam vim ingenii causamque iustam, cur nova existeret disciplina...</p>
						<a href="#" title="Read more" class="read-more">Read more...</a>
					</div>
				</div>

				<div class="col-md-4 news-box">
					<div class="news-title-wrap">
						<div class="news-date">
							<span>25</span>
							<span>Jan</span>
						</div>
						<div class="news-post-title-wrap">
							<h4 class="news-post-title">
								<a href="#" title="Hmm">Sed quid sentiat, non videtis. Hopa tzop. Mentosanu</a>
							</h4>
						</div>
						<div class="news-posted-on">
							<a href="#" title="codeinwp">codeinwp</a>
							<a href="#" title="14 comments">14 comments</a>
						</div>
					</div>
					<div class="news-img-wrap">
						<a href="#" title="Title fratele meu">
							<img src="<?php echo get_template_directory_uri(); ?>/images/img-blog.jpg" alt="Alt alt frate">
						</a>
					</div>
					<div class="border-left news-content-wrap">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eo enim positum est id, quod dicimus esse expetendum. At, illa, ut vobis placet, partem quandam tuetur, reliquam deserit. O magnam vim ingenii causamque iustam, cur nova existeret disciplina...</p>
						<a href="#" title="Read more" class="read-more">Read more...</a>
					</div>
				</div>

				<div class="col-md-4 news-box">
					<div class="news-title-wrap">
						<div class="news-date">
							<span>25</span>
							<span>Jan</span>
						</div>
						<div class="news-post-title-wrap">
							<h4 class="news-post-title">
								<a href="#" title="Hmm">Sed quid sentiat, non videtis.</a>
							</h4>
						</div>
						<div class="news-posted-on">
							<a href="#" title="codeinwp">codeinwp</a>
							<a href="#" title="14 comments">14 comments</a>
						</div>
					</div>
					<div class="news-img-wrap">
						<a href="#" title="Title fratele meu">
							<img src="<?php echo get_template_directory_uri(); ?>/images/img-blog.jpg" alt="Alt alt frate">
						</a>
					</div>
					<div class="border-left news-content-wrap">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eo enim positum est id, quod dicimus esse expetendum. At, illa, ut vobis placet, partem quandam tuetur, reliquam deserit. O magnam vim ingenii causamque iustam, cur nova existeret disciplina...</p>
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