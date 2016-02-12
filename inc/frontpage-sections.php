<?php
/*
 * Frontpage sections
 */



 if ( ! function_exists( 'lawyeriax_lite_slider_section' ) ) :
 /**
  * Ribbon sections
  */
 function lawyeriax_lite_slider_section() {
   $slider_content = get_theme_mod('lawyeriax_slider_content', json_encode(array(
       array(
           'title'      => esc_html__('Meet Lawyeria', 'lawyeriax-lite'),
           'text'       => esc_html__('A WordPress theme for lawyers websites. Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.', 'lawyeriax-lite'),
           'subtitle'   => esc_html__('Request Legal Advice', 'lawyeriax-lite'),
           'link'				=> '#',
           'image_url'	=> get_template_directory_uri() . '/images/slider/slider.jpg'
       ),
       array(
           'title'      => esc_html__('Business Ready', 'lawyeriax-lite'),
           'text'       => esc_html__('A WordPress theme for lawyers websites. Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.', 'lawyeriax-lite'),
           'subtitle'   => esc_html__('Buy Now', 'lawyeriax-lite'),
           'link'				=> '#',
           'image_url'	=> get_template_directory_uri() . '/images/slider/slider.jpg'
       ),
       array(
           'title'      => esc_html__('Fully Responsive', 'lawyeriax-lite'),
           'text'       => esc_html__('A WordPress theme for lawyers websites. Show everyone who you are, present your team, your activities and what customers say about you. Your strengths need to be known by everybody.', 'lawyeriax-lite'),
           'subtitle'   => esc_html__('More Themes', 'lawyeriax-lite'),
           'link'				=> '#',
           'image_url'	=> get_template_directory_uri() . '/images/slider/slider.jpg'
       ),
     )));
       $var   = 0;
       $var1  = 0;
 	?>

 	<section id="slider" class="header-slider">
 		<div id="main-slider" class="carousel slide" data-ride="carousel">
      <?php if(!empty($slider_content)){
        $slider_content_decoded = json_decode($slider_content);
        if(!empty($slider_content_decoded)) { ?>
      <ol class="carousel-indicators">

        <?php

            foreach($slider_content_decoded as $slider_content) {
              if($var == 0) {
                echo '<li data-target="#main-slider" data-slide-to="'. $var .'" class="active"></li>';
                $var++;
              } else {
                echo '<li data-target="#main-slider" data-slide-to="'. $var .'"></li>';
                $var++;
              }} ?>
 			</ol>

 			<div class="carousel-inner" role="listbox">

        <?php

          foreach($slider_content_decoded as $slider_content) {
            if($var1 == 0) { ?>
              <div class="item active">
                <?php } else { ?>
              <div class="item">
                <?php } ?>
   					<div class="item-inner" style="background-image: url('<?php echo esc_attr($slider_content->image_url); ?>');">
   						<div class="carousel-caption">
   							<div class="container">
   								<p class="col-md-8 carousel-title"> <?php echo esc_html($slider_content->title); ?> </p>
   								<p class="col-md-8 carousel-content"> <?php echo esc_html($slider_content->text); ?> </p>
   								<p class="col-md-8 carousel-button"><a href="<?php echo esc_url($slider_content->link); ?>" class="slider-button" title="Title"><?php echo esc_html($slider_content->subtitle); ?></a></p>
   							</div>
   						</div>
   					</div>
   				</div>

        <?php $var1++; } } } ?>
 			</div>

 			<a class="left carousel-control" href="#main-slider" role="button" data-slide="prev">
 				<span class="fa fa-angle-left" aria-hidden="true"></span>
 				<span class="sr-only">Previous</span>
 			</a>
 			<a class="right carousel-control" href="#main-slider" role="button" data-slide="next">
 				<span class="fa fa-angle-right" aria-hidden="true"></span>
 				<span class="sr-only">Next</span>
 			</a>
 		</div>

 	</section><!-- #slider -->

 	<?php
}
endif;



 if ( ! function_exists( 'lawyeriax_lite_ribbon_section' ) ) :
 /**
  * Ribbon sections
  */
 function lawyeriax_lite_ribbon_section() {
   global $wp_customize;
   $ribbon_tagline = get_theme_mod('lawyeriax_ribbon_tagline', esc_html__('The safety of the people shall be the highest law.','lawyeriax-lite'));

  if(!empty($ribbon_tagline)) { ?>
   	<section id="ribbon" class="home-section ribbon">
   		<div class="container">
   			<div class="home-section-inner">
   				<p class="ribbon-big-title"><?php echo esc_html($ribbon_tagline) ?></p>
   			</div>
   			<div class="col-sm-10 col-sm-offset-1 section-line"></div>
   		</div><!-- .container -->
   	</section>
  <?php
} else if (isset( $wp_customize ) ) { ?>
    <section id="ribbon" class="home-section ribbon">
      <div class="container">
        <div class="home-section-inner">
          <p class="ribbon-big-title lawyeriax_lite_only_customizer"></p>
        </div>
        <div class="col-sm-10 col-sm-offset-1 section-line"></div>
      </div><!-- .container -->
    </section>
 <?php } }
 endif;



 if ( ! function_exists( 'lawyeriax_lite_features_section' ) ) :
 /**
  * Features sections
  */
 function lawyeriax_lite_features_section() {
   $features_content = get_theme_mod('lawyeriax_features_content', json_encode(array(
       array(
           'title'       => esc_html__('Lorem ipsum', 'lawyeriax-lite'),
           'text'    		 => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.', 'lawyeriax-lite'),
           'subtitle'    => esc_html__('Read more...', 'lawyeriax-lite'),
           'link'				 => '#',
           'icon_value'  => esc_html('fa-gavel')
       ),

       array(
           'title'       => esc_html__('Lorem ipsum', 'lawyeriax-lite'),
           'text'    	   => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.', 'lawyeriax-lite'),
           'subtitle'    => esc_html__('Read more...', 'lawyeriax-lite'),
           'link'				 => '#',
           'icon_value'  => esc_html('fa-gavel')
       ),

       array(
           'title'       => esc_html__('Lorem ipsum', 'lawyeriax-lite'),
           'text'    		 => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.', 'lawyeriax-lite'),
           'subtitle'    => esc_html__('Read more...', 'lawyeriax-lite'),
           'link'				 => '#',
           'icon_value'  => esc_html('fa-gavel')
       ),

       array(
           'title'       => esc_html__('Lorem ipsum', 'lawyeriax-lite'),
           'text'    		 => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu. vestibulum accumsan in in leo.', 'lawyeriax-lite'),
           'subtitle'    => esc_html__('Read more...', 'lawyeriax-lite'),
           'link'				 => '#',
           'icon_value'  => esc_html('fa-gavel')
       ),
     )));
  ?>

 	<section id="features" class="features">
 		<div class="container">
 			<div class="home-section-inner feature-boxes-wrap">

        <?php if(!empty($features_content)){
          $features_content_decoded = json_decode($features_content);
          if(!empty($features_content_decoded)) {
            foreach($features_content_decoded as $features_content) { ?>
       				<div class="col-xs-12 col-sm-6 col-md-3 feature-box">
       					<div class="features-title">
       						<span class="features-title-icon"><i class="fa <?php echo $features_content->icon_value; ?>"></i></span>
       						<div class="feature-title-wrap">
       							<h3 class="feature-title"><?php echo esc_html($features_content->title); ?></h3>
       						</div>
       					</div>
       					<div class="border-left features-content">
       						<p><?php echo esc_html($features_content->text); ?></p>
       						<a href="<?php echo esc_url($features_content->link); ?>" title="Read more" class="read-more"><?php echo esc_html($features_content->subtitle); ?></a>
       					</div>
       				</div>
              <?php
            }
          }
        } ?>

 			</div>
 			<div class="col-sm-10 col-sm-offset-1 section-line"></div>
 		</div><!-- .container -->
 	</section>

 	<?php
 }
 endif;



 if ( ! function_exists( 'lawyeriax_lite_lawyers_section' ) ) :
 /**
  * Ribbon sections
  */
 function lawyeriax_lite_lawyers_section() {
   $lawyers_section = get_theme_mod('lawyeriax_lawyers_heading', esc_html__('Our Lawyers','lawyeriax-lite'));
   global $wp_customize;
 	?>

 	<section id="lawyer" class="home-section lawyer">
 		<div class="container">

      <?php
      if(!empty($lawyers_section)) { ?>
   			<div class="home-section-title-wrap">
   				<h2 class="home-section-title"><?php echo esc_html($lawyers_section) ?></h2>
   			</div>
      <?php } else if (isset ( $wp_customize ) ) { ?>

        <div class="home-section-title-wrap">
   				<h2 class="home-section-title lawyeriax_lite_only_customizer"></h2>
   			</div>
      <?php } ?>

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

 			<div class="col-sm-10 col-sm-offset-1 section-line"></div>
 		</div><!-- .container -->
 	</section>

 	<?php
 }
 endif;



 if ( ! function_exists( 'lawyeriax_lite_about_us_section' ) ) :
 /**
  * About us sections
  */
 function lawyeriax_lite_about_us_section() {
   $about_image = get_theme_mod('lawyeria_about_image', get_template_directory_uri() . '/images/about-us.jpg');
   $about_title = get_theme_mod('lawyeriax_about_heading', esc_html__('Choose the color that suits you for the following: Menu, Header, Footer and Frontpage boxes', 'lawyeriax-lite'));
   $about_text = get_theme_mod('lawyeriax_about_text', esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Expressa vero in iis aetatibus, quae iam confirmatae sunt. Nihil opus est exemplis hoc facere longius. Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est. Sed tu, ut dignum est tua erga me et philosophiam voluntate ab adolescentulo suscepta, fac ut Metrodori tueare liberos. Vitae autem degendae ratio maxime quidem illis placuit quieta. Quae si potest singula consolando levare, universa quo modo sustinebit? Ita fit beatae vitae domina fortuna, quam Epicurus ait exiguam intervenire sapienti. Duo Reges: constructio interrete. Epicurus ait exiguam intervenire sapienti. Duo Reges: constructio interrete.', 'lawyeriax-lite'));
   global $wp_customize;
 	?>

 	<section id="about" class="home-section about">
 		<div class="container">

 			<div class="home-section-inner">

        <?php if(!empty($about_image)) { ?>

          <div class="col-sm-5 about-image-wrap">
   					<img src="<?php echo esc_url($about_image); ?>" alt="About Us Image">
   				</div>

          <div class="col-sm-7 about-content-wrap">

        <?php } else {?>

          <div class="col-sm-12 about-content-wrap">

        <?php }

        if(!empty($about_title)) { ?>

          <h3 class="about-title"><?php echo esc_html($about_title) ?></h3>

          <?php } else if (isset ( $wp_customize ) ) { ?>

            <h3 class="about-title lawyeriax_lite_only_customizer"></h3>

          <?php }

        if(!empty($about_text)) { ?>

          <div class="border-left about-content">

            <p><?php echo esc_html($about_text); ?></p>

          </div>

          <?php } else if (isset ( $wp_customize ) ) { ?>

            <div class="border-left about-content">

              <p class="lawyeriax_lite_only_customizer"></p>

            </div>

          <?php } ?>

 				   </div>
 			</div>

 			<div class="col-sm-10 col-sm-offset-1 section-line"></div>
 		</div><!-- .container -->
 	</section>

 	<?php
 }
 endif;

if ( ! function_exists( 'lawyeriax_lite_latest_news_section' ) ) :
/**
 * Latest news section
 */
function lawyeriax_lite_latest_news_section() {
  global $wp_customize;
  $news_heading = get_theme_mod('news_heading', esc_html__('Latest News','lawyeriax-lite'));

	?>

	<section id="news" class="home-section news">
		<div class="container">
      <?php
      if(!empty($news_heading)) { ?>
			     <div class="home-section-title-wrap">
		           <h2 class="home-section-title"> <?php echo esc_html($news_heading) ?></h2>
           </div>
       <?php	} else if (isset ( $wp_customize ) ) { ?>
           <div class="home-section-title-wrap">
               <h2 class="home-section-title lawyeriax_lite_only_customizer"></h2>
           </div>
       <?php } ?>

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

			<div class="col-sm-10 col-sm-offset-1 section-line"></div>
			</div><!-- .container -->
	</section>

	<?php
}
endif;
