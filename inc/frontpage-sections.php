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
                  <?php if(!empty($slider_content->title)) { ?>
   								<p class="col-md-8 carousel-title"> <?php echo esc_html($slider_content->title); ?> </p>
                  <?php }
                  if(!empty($slider_content->text)) { ?>
                    <p class="col-md-8 carousel-content"> <?php echo esc_html($slider_content->text); ?> </p>
                  <?php }
                  if(!empty($slider_content->subtitle)) { ?>
                  <p class="col-md-8 carousel-button"><a href="<?php echo esc_url($slider_content->link); ?>" class="slider-button" title="Title"><?php echo esc_html($slider_content->subtitle); ?></a></p>
                  <?php } ?>
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

      $feature_box_first = get_theme_mod('first_feature_box');
      $feature_box_second = get_theme_mod('second_feature_box');
      $feature_box_third = get_theme_mod('third_feature_box');
      $feature_box_fourth = get_theme_mod('fourth_feature_box');

      $box_ids = array( $feature_box_first, $feature_box_second, $feature_box_third, $feature_box_fourth );

      if ( array_sum($box_ids) > 0 ) {

  ?>

     	<section id="features" class="features">
     		<div class="container">
     			<div class="home-section-inner feature-boxes-wrap">

            <?php

            if(!empty($box_ids)) {
              foreach($box_ids as $id) {
                if($id != 0) {
                $page = get_post($id); ?>
                <div class="col-xs-12 col-sm-6 col-md-3 feature-box">
                  <div class="features-title">
                    <span class="features-title-icon"><i class="fa fa-gavel"></i></span>

                    <?php if(!empty($page->post_title)) { ?>

                      <div class="feature-title-wrap">
                        <h3 class="feature-title"><?php echo esc_html($page->post_title); ?></h3>
                      </div>

                    <?php } ?>

                  </div>

                  <?php

                   if(!empty($page->post_excerpt)) { ?>
                    <div class="border-left features-content">
                      <p><?php echo esc_html(substr($page->post_excerpt, 0, 100)) . '...'; ?></p>
                      <a href="<?php echo the_permalink($id); ?>" title="Read more" class="read-more"> <?php echo __('Read more...', 'lawyeriax-lite') ?> </a>
                    </div>

                  <?php } else if(!empty($page->post_content)) { ?>

                    <div class="border-left features-content">
                      <p><?php echo esc_html(substr($page->post_content, 0 , 100)) . '...'; ?></p>
                      <a href="<?php echo the_permalink($id); ?>" title="Read more" class="read-more"> <?php echo __('Read more...', 'lawyeriax-lite') ?> </a>
                    </div>

                  <?php } ?>

                </div>

                <?php
              }
            }
          }
        ?>

      </div>
    <div class="col-sm-10 col-sm-offset-1 section-line"></div>
  </div><!-- .container -->
</section>
 
<?php } 
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
