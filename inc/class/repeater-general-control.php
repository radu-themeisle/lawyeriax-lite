<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

class General_Repeater extends WP_Customize_Control {

    private $options = array();

    /*Class constructor*/
    public function __construct( $manager, $id, $args = array() ) {
        parent::__construct( $manager, $id, $args );
        /*Get options from customizer.php*/
        $this->options = $args;
    }

    public function render_content() {

        /*Counter that helps checking if the box is first and should have the delete button disabled*/
        $it = 0;

        /*Get default options*/
        $this_default = json_decode( $this->setting->default );

        /*Get values (json format)*/
        $values = $this->value();

        /*Decode values*/
        $json = json_decode( $values );

        if( !is_array( $json ) ){
            $json = array($values);
        }

        /*This stores what kind of controls should the repeater have in it*/
        $options = $this->options;

        if( !empty( $options['repeater_image_control'] ) ){
            $repeater_image_control = $options['repeater_image_control'];
        } else {
            $repeater_image_control = false;
        }

        if( !empty( $options['repeater_icon_control'] ) ){
            $repeater_icon_control = $options['repeater_icon_control'];
            $icons_array = array('none' => 'none','500px' => 'fa-500px','amazon' => 'fa-amazon','android' => 'fa-android','behance' => 'fa-behance','behance-square' => 'fa-behance-square','bitbucket' => 'fa-bitbucket','bitbucket-square' => 'fa-bitbucket-square','american-express' => 'fa-cc-amex','diners-club' => 'fa-cc-diners-club','discover' => 'fa-cc-discover','jcb' => 'fa-cc-jcb','mastercard' => 'fa-cc-mastercard','paypal' => 'fa-cc-paypal','stripe' => 'fa-cc-stripe','visa' => 'fa-cc-visa','codepen' => 'fa-codepen','css3' => 'fa-css3','delicious' => 'fa-delicious','deviantart' => 'fa-deviantart','digg' => 'fa-digg','dribble' => 'fa-dribbble','dropbox' => 'fa-dropbox','drupal' => 'fa-drupal','facebook' => 'fa-facebook','facebook-official' => 'fa-facebook-official','facebook-square' => 'fa-facebook-square','flickr' => 'fa-flickr','foursquare' => 'fa-foursquare', 'gavel' => 'fa-gavel', 'git' => 'fa-git','git-square' => 'fa-git-square','github' => 'fa-github','github-alt' => 'fa-github-alt','github-square' => 'fa-github-square','google' => 'fa-google','google-plus' => 'fa-google-plus','google-plus-square' => 'fa-google-plus-square','html5' => 'fa-html5','instagram' => 'fa-instagram','joomla' => 'fa-joomla','jsfiddle' => 'fa-jsfiddle','linkedin' => 'fa-linkedin','linkedin-square' => 'fa-linkedin-square','opencart' => 'fa-opencart','openid' => 'fa-openid','paypal' => 'fa-paypal','pinterest' => 'fa-pinterest','pinterest-p' => 'fa-pinterest-p','pinterest-square' => 'fa-pinterest-square','rebel' => 'fa-rebel','reddit' => 'fa-reddit','reddit-square' => 'fa-reddit-square','share' => 'fa-share-alt','share-square' => 'fa-share-alt-square','skype' => 'fa-skype','slack' => 'fa-slack','soundcloud' => 'fa-soundcloud','spotify' => 'fa-spotify','stack-overflow' => 'fa-stack-overflow','steam' => 'fa-steam','steam-square' => 'fa-steam-square','tripadvisor' => 'fa-tripadvisor','tumblr' => 'fa-tumblr','tumblr-square' => 'fa-tumblr-square','twitch' => 'fa-twitch','twitter' => 'fa-twitter','twitter-square' => 'fa-twitter-square','vimeo' => 'fa-vimeo','vimeo-square' => 'fa-vimeo-square','vine' => 'fa-vine','whatsapp' => 'fa-whatsapp','wordpress' => 'fa-wordpress','yahoo' => 'fa-yahoo','youtube' => 'fa-youtube','youtube-play' => 'fa-youtube-play','youtube-squar' => 'fa-youtube-square');
        } else {
             $repeater_icon_control = false;
        }

        if( !empty( $options['repeater_title_control'] ) ){
            $repeater_title_control = $options['repeater_title_control'];
        } else {
            $repeater_title_control = false;
        }

        if( !empty( $options['repeater_subtitle_control'] ) ){
            $repeater_subtitle_control = $options['repeater_subtitle_control'];
        } else {
            $repeater_subtitle_control = false;
        }

        if( !empty( $options['repeater_text_control'] ) ){
            $repeater_text_control = $options['repeater_text_control'];
        } else {
            $repeater_text_control = false;
        }

        if( !empty( $options['repeater_link_control'] ) ){
            $repeater_link_control = $options['repeater_link_control'];
        } else {
            $repeater_link_control = false;
        }

        if( !empty( $options['repeater_shortcode_control'] ) ){
            $repeater_shortcode_control = $options['repeater_shortcode_control'];
        } else {
            $repeater_shortcode_control = false;
        }

        if( !empty( $options['repeater_socials_repeater_control'] ) ){
            $repeater_socials_repeater_control = $options['repeater_socials_repeater_control'];
            $icons_array = array('none' => 'none','500px' => 'fa-500px','amazon' => 'fa-amazon','android' => 'fa-android','behance' => 'fa-behance','behance-square' => 'fa-behance-square','bitbucket' => 'fa-bitbucket','bitbucket-square' => 'fa-bitbucket-square','american-express' => 'fa-cc-amex','diners-club' => 'fa-cc-diners-club','discover' => 'fa-cc-discover','jcb' => 'fa-cc-jcb','mastercard' => 'fa-cc-mastercard','paypal' => 'fa-cc-paypal','stripe' => 'fa-cc-stripe','visa' => 'fa-cc-visa','codepen' => 'fa-codepen','css3' => 'fa-css3','delicious' => 'fa-delicious','deviantart' => 'fa-deviantart','digg' => 'fa-digg','dribble' => 'fa-dribbble','dropbox' => 'fa-dropbox','drupal' => 'fa-drupal','facebook' => 'fa-facebook','facebook-official' => 'fa-facebook-official','facebook-square' => 'fa-facebook-square','flickr' => 'fa-flickr','foursquare' => 'fa-foursquare', 'gavel' => 'fa-gavel', 'git' => 'fa-git','git-square' => 'fa-git-square','github' => 'fa-github','github-alt' => 'fa-github-alt','github-square' => 'fa-github-square','google' => 'fa-google','google-plus' => 'fa-google-plus','google-plus-square' => 'fa-google-plus-square','html5' => 'fa-html5','instagram' => 'fa-instagram','joomla' => 'fa-joomla','jsfiddle' => 'fa-jsfiddle','linkedin' => 'fa-linkedin','linkedin-square' => 'fa-linkedin-square','opencart' => 'fa-opencart','openid' => 'fa-openid','paypal' => 'fa-paypal','pinterest' => 'fa-pinterest','pinterest-p' => 'fa-pinterest-p','pinterest-square' => 'fa-pinterest-square','rebel' => 'fa-rebel','reddit' => 'fa-reddit','reddit-square' => 'fa-reddit-square','share' => 'fa-share-alt','share-square' => 'fa-share-alt-square','skype' => 'fa-skype','slack' => 'fa-slack','soundcloud' => 'fa-soundcloud','spotify' => 'fa-spotify','stack-overflow' => 'fa-stack-overflow','steam' => 'fa-steam','steam-square' => 'fa-steam-square','tripadvisor' => 'fa-tripadvisor','tumblr' => 'fa-tumblr','tumblr-square' => 'fa-tumblr-square','twitch' => 'fa-twitch','twitter' => 'fa-twitter','twitter-square' => 'fa-twitter-square','vimeo' => 'fa-vimeo','vimeo-square' => 'fa-vimeo-square','vine' => 'fa-vine','whatsapp' => 'fa-whatsapp','wordpress' => 'fa-wordpress','yahoo' => 'fa-yahoo','youtube' => 'fa-youtube','youtube-play' => 'fa-youtube-play','youtube-squar' => 'fa-youtube-square');
        } else {
            $repeater_socials_repeater_control = false;
        }
?>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <div class="repeater_general_control_repeater repeater_general_control_droppable">
        <?php
        /* If there are no values*/
        if( empty( $json ) ) { ?>
            <div class="repeater_general_control_repeater_container">
                <div class="repeater-customize-control-title"><?php esc_html_e('LawyeriaX Lite','lawyeriax-lite')?></div>
                <div class="repeater-box-content-hidden">
                <?php
                /*If both image and icon control are enabled you should be able to choose if you want to upload an image or to choose an icon*/
                if($repeater_image_control == true && $repeater_icon_control == true){ ?>
                    <span class="customize-control-title"><?php esc_html_e('Image type','lawyeriax-lite');?></span>
                    <select class="repeater_image_choice">
                        <option value="repeater_icon" selected><?php esc_html_e('Icon','lawyeriax-lite'); ?></option>
                        <option value="repeater_image"><?php esc_html_e('Image','lawyeriax-lite'); ?></option>
                        <option value="repeater_none"><?php esc_html_e('None','lawyeriax-lite'); ?></option>
                    </select>
                    <p class="repeater_image_control" style="display:none">
                        <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite')?></span>
                        <input type="text" class="widefat custom_media_url">
                        <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                    </p>
                    <div class="repeater_general_control_icon">
                        <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                        <div class="lawyeriax-dd">
                            <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                            <?php
                            foreach($icons_array as $key => $value) {
                                echo '<option value="'.esc_attr($value).'" data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                            } ?>
                            </select>
                        </div>
                    </div>
                <?php
                } else {
                    if($repeater_image_control ==true){	?>
                        <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite')?></span>
                        <p class="repeater_image_control">
                            <input type="text" class="widefat custom_media_url">
                            <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                        </p>
                    <?php
                    }

                    if($repeater_icon_control ==true){ ?>
                        <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                        <div class="lawyeriax-dd">
                            <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                            <?php
                            foreach($icons_array as $key => $value) {
                                echo '<option value="'.esc_attr($value).'" '.selected($icon->icon_value,$value).' data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                            }
                            ?>
                            </select>
                        </div>
                    <?php
                    }
                }


                if($repeater_title_control==true){ ?>
                    <span class="customize-control-title"><?php esc_html_e('Title','lawyeriax-lite')?></span>
                    <input type="text" class="repeater_title_control" placeholder="<?php esc_html_e('Title','lawyeriax-lite'); ?>"/>
                <?php
                }

                if($repeater_subtitle_control==true){ ?>
                    <span class="customize-control-title"><?php esc_html_e('Subtitle','lawyeriax-lite')?></span>
                    <input type="text" class="repeater_subtitle_control" placeholder="<?php esc_html_e('Subtitle','lawyeriax-lite'); ?>"/>
                <?php
                }

                if($repeater_text_control==true){?>
                    <span class="customize-control-title"><?php esc_html_e('Text','lawyeriax-lite')?></span>
                    <span class="description customize-control-description"><?php esc_html_e('Allowed html: br, em, strong, a, button, ul, li','lawyeriax-lite');?></span>
                    <textarea class="repeater_text_control" placeholder="<?php esc_html_e('Text','lawyeriax-lite'); ?>"></textarea>
                <?php
                }

                if($repeater_link_control==true){ ?>
                    <span class="customize-control-title"><?php esc_html_e('Link','lawyeriax-lite')?></span>
                    <input type="text" class="repeater_link_control" placeholder="<?php esc_html_e('Link','lawyeriax-lite'); ?>"/>
                <?php
                }

                if($repeater_shortcode_control==true){ ?>
                    <span class="customize-control-title"><?php esc_html_e('Shortcode','lawyeriax-lite')?></span>
                    <input type="text" class="repeater_shortcode_control" placeholder="<?php esc_html_e('Shortcode','lawyeriax-lite'); ?>"/>
                <?php
                }

                if($repeater_socials_repeater_control==true){ ?>
                    <span class="customize-control-title"><?php esc_html_e('Social icons','lawyeriax-lite')?></span>
                    <div class="repeater-social-repeater">
                        <div class="repeater-social-repeater-container">
                            <div class="lawyeriax-dd">
                                <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                                <?php
                                foreach($icons_array as $value) {
                                    echo '<option value="'.esc_attr($value).'" '.selected($value, 'No Icon').' data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <input type="text" class="repeater_social_repeater_link" placeholder="<?php esc_html_e( 'Link', 'lawyeriax-lite' ); ?>">
                            <button class="repeater_remove_social_item" style="display:none"><?php esc_html_e('X','lawyeriax-lite'); ?></button>
                        </div>
                        <input type="hidden" id="repeater_socials_repeater_colector" <?php $this->link(); ?> class="repeater_socials_repeater_colector" value="" />
                    </div>
                    <button class="repeater_add_social_item button button-primary"><?php esc_html_e('Add icon','lawyeriax-lite'); ?></button>
                <?php
                } ?>

                <input type="hidden" class="repeater_box_id">
                <button type="button" class="repeater_general_control_remove_field button" style="display:none;"><?php esc_html_e('Delete field','lawyeriax-lite'); ?></button>
                </div> <!-- end .repeater-box-content-hidden -->
            </div> <!-- end .repeater_general_control_repeater_container -->
        <?php
        } else {
            /*There are no values set but there are default values*/
            if ( !empty( $this_default ) && empty( $json ) ) {
                foreach($this_default as $icon){ ?>
                    <div class="repeater_general_control_repeater_container repeater_draggable">
                        <div class="repeater-customize-control-title"><?php esc_html_e('LawyeriaX Lite','lawyeriax-lite')?></div>
                        <div class="repeater-box-content-hidden">
                        <?php
                        /*If both image and icon control are enabled you should be able to choose if you want to upload an image or to choose an icon*/
                        if($repeater_image_control == true && $repeater_icon_control == true){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Image type','lawyeriax-lite');?></span>
                            <select class="repeater_image_choice">
                                <option value="repeater_icon" <?php selected( $icon->choice, 'repeater_icon' );?>><?php esc_html_e( 'Icon', 'lawyeriax-lite' ); ?></option>
                                <option value="repeater_image" <?php selected( $icon->choice, 'repeater_image' );?>><?php esc_html_e( 'Image', 'lawyeriax-lite' ); ?></option>
                                <option value="repeater_none" <?php selected( $icon->choice, 'repeater_none' );?>><?php esc_html_e( 'None', 'lawyeriax-lite' ); ?></option>
                            </select>
                            <p class="repeater_image_control"  <?php if( !empty( $icon->choice ) && $icon->choice != 'repeater_image' ){ echo 'style="display:none"';} ?>>
                                <span class="customize-control-title"><?php esc_html_e( 'Image', 'lawyeriax-lite' ); ?></span>
                                <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                            </p>
                            <div class="repeater_general_control_icon" <?php if( !empty( $icon->choice ) && $icon->choice != 'repeater_icon'){ echo 'style="display:none"';} ?>>
                                <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                                <div class="lawyeriax-dd">
                                    <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                                    <?php
                                    foreach($icons_array as $key => $value) {
                                        echo '<option value="'.esc_attr( $value ).'" '.selected( $icon->icon_value, $value ).' data-iconclass="'.esc_attr( $value ).'" >'.esc_attr( $value ).'</option>';
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                        <?php
                        } else {

                            if( $repeater_image_control == true ){ ?>
                                <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite')?></span>
                                <p class="repeater_image_control">
                                    <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                    <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                                </p>
                            <?php
                            }

                            if( $repeater_icon_control == true ){ ?>
                                <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                                <div class="lawyeriax-dd">
                                    <select name="<?php echo esc_attr( $this->id ); ?>" class="repeater_icon_control">
                                    <?php
                                    foreach($icons_array as $key => $value) {
                                        echo '<option value="'.esc_attr($value).'" '.selected($icon->icon_value,$value).' data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                                    }
                                    ?>
                                    </select>
                                </div>
                            <?php
                            }
                        }

                        if( $repeater_title_control == true ){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Title','lawyeriax-lite')?></span>
                            <input type="text" value="<?php if(!empty($icon->title)) echo esc_attr($icon->title); ?>" class="repeater_title_control" placeholder="<?php esc_html_e('Title','lawyeriax-lite'); ?>"/>
                        <?php
                        }

                        if( $repeater_subtitle_control == true ){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Subtitle','lawyeriax-lite')?></span>
                            <input type="text" value="<?php if(!empty($icon->subtitle)) echo esc_attr($icon->subtitle); ?>" class="repeater_subtitle_control" placeholder="<?php esc_html_e('Subtitle','lawyeriax-lite'); ?>"/>
                        <?php
                        }

                        if( $repeater_text_control == true ){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Text','lawyeriax-lite')?></span>
                            <span class="description customize-control-description"><?php esc_html_e('Allowed html: br, em, strong, a, button, ul, li','lawyeriax-lite');?></span>
                            <textarea placeholder="<?php esc_html_e('Text','lawyeriax-lite'); ?>" class="repeater_text_control"><?php if(!empty($icon->text)) {echo esc_attr($icon->text);} ?></textarea>
                        <?php
                        }

                        if($repeater_link_control){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Link','lawyeriax-lite')?></span>
                            <input type="text" value="<?php if(!empty($icon->link)) echo esc_url($icon->link); ?>" class="repeater_link_control" placeholder="<?php esc_html_e('Link','lawyeriax-lite'); ?>"/>
                        <?php
                        }

                        if($repeater_shortcode_control==true){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Shortcode','lawyeriax-lite')?></span>
                            <input type="text" value='<?php if(!empty($icon->shortcode)) echo $icon->shortcode; ?>' class="repeater_shortcode_control" placeholder="<?php esc_html_e('Shortcode','lawyeriax-lite'); ?>"/>
                        <?php
                        }

                        if($repeater_socials_repeater_control==true){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Social icons','lawyeriax-lite')?></span>
                            <div class="repeater-social-repeater">
                            <?php
                            if( isset( $icon->social_repeater ) && !empty( $icon->social_repeater ) ){
                                /*This counter check to see if is first icon in repeater and hide the delete button if it is*/
                                $show_del = 0;
                                $social_repeater = json_decode(html_entity_decode($icon->social_repeater),true);
                                foreach( $social_repeater as $social_icon ){
                                    $show_del++; ?>
                                    <div class="repeater-social-repeater-container">
                                        <div class="lawyeriax-dd">
                                            <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                                            <?php
                                            foreach($icons_array as $value) {
                                                echo '<option value="'.esc_attr( $value ).'" '.selected( $social_icon['icon'], $value ).' data-iconclass="'.esc_attr( $value ).'" >'.esc_attr( $value ).'</option>';
                                            } ?>
                                            </select>
                                        </div>
                                        <input type="text" class="repeater_social_repeater_link" placeholder="<?php esc_html_e( 'Link', 'lawyeriax-lite' ); ?>" value="<?php if( !empty($social_icon['link']) ) echo esc_url($social_icon['link']); ?>" >
                                        <button type="button" class="button repeater_remove_social_item" style="display:none"><?php esc_html_e('X','lawyeriax-lite'); ?></button>
                                    </div>
                                <?php
                                } ?>
                                <input type="hidden" id="repeater_socials_repeater_colector" <?php $this->link(); ?> class="repeater_socials_repeater_colector" value="<?php echo esc_textarea( html_entity_decode( $icon->social_repeater ) ); ?>" />
                                </div>
                                <button class="repeater_add_social_item button button-primary"><?php esc_html_e('Add icon','lawyeriax-lite'); ?></button>
                            <?php
                            } else { ?>
                                <div class="repeater-social-repeater-container">
                                    <div class="lawyeriax-dd">
                                        <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                                        <?php
                                            foreach($icons_array as $value) {
                                                echo '<option value="'.esc_attr($value).'" '.selected($value,"No Icon").' data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                                            } ?>
                                        </select>
                                    </div>
                                    <input type="text" class="repeater_social_repeater_link" placeholder="<?php esc_html_e( 'Link', 'lawyeriax-lite' ); ?>" value="" >
                                    <button class="repeater_remove_social_item" style="display:none"><?php esc_html_e('X','lawyeriax-lite'); ?></button>
                                </div>
                                <input type="hidden" id="repeater_socials_repeater_colector" class="repeater_socials_repeater_colector" value="" />
                                </div>
                                <button class="repeater_add_social_item button button-primary"><?php esc_html_e('Add icon','lawyeriax-lite'); ?></button>
                            <?php
                            }
                        } ?>

                        <input type="hidden" class="repeater_box_id" value="<?php if(!empty($icon->id)) echo esc_attr($icon->id); ?>">
                        <button type="button" class="repeater_general_control_remove_field button" <?php if ($it == 0) echo 'style="display:none;"'; ?>><?php esc_html_e('Delete field','lawyeriax-lite'); ?></button>
                        </div> <!-- end .repeater-box-content-hidden -->
                    </div> <!-- end .repeater_general_control_repeater_container -->
                <?php
                    $it++;
                }
            } else {

                foreach($json as $icon){ ?>
                    <div class="repeater_general_control_repeater_container repeater_draggable">
                        <div class="repeater-customize-control-title"><?php esc_html_e('LawyeriaX Lite','lawyeriax-lite')?></div>
                        <div class="repeater-box-content-hidden">
                        <?php
                        if($repeater_image_control == true && $repeater_icon_control == true){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Image type','lawyeriax-lite');?></span>
                            <select class="repeater_image_choice">
                                <option value="repeater_icon" <?php selected( $icon->choice, 'repeater_icon' );?>><?php esc_html_e( 'Icon', 'lawyeriax-lite' );?></option>
                                <option value="repeater_image" <?php selected( $icon->choice, 'repeater_image' );?>><?php esc_html_e( 'Image', 'lawyeriax-lite' );?></option>
                                <option value="repeater_none" <?php selected( $icon->choice, 'repeater_none' );?>><?php esc_html_e( 'None', 'lawyeriax-lite' );?></option>
                            </select>
                            <p class="repeater_image_control" <?php if(!empty($icon->choice) && $icon->choice!='repeater_image'){ echo 'style="display:none"';}?>>
                                <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite');?></span>
                                <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                            </p>
                            <div class="repeater_general_control_icon" <?php  if(!empty($icon->choice) && $icon->choice!='repeater_icon'){ echo 'style="display:none"';}?>>
                                <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                                <div class="lawyeriax-dd">
                                    <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                                    <?php
                                    foreach($icons_array as $key => $value) {
                                        echo '<option value="'.esc_attr($value).'" '.selected($icon->icon_value,$value).' data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                                    } ?>
                                    </select>
                                </div>
                            </div>
                        <?php
                        } else {

                            if($repeater_image_control == true){ ?>
                                <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite')?></span>
                                <p class="repeater_image_control">
                                    <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                    <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                                </p>
                            <?php
                            }

                            if($repeater_icon_control==true){ ?>
                                <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                                <div class="lawyeriax-dd">
                                    <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                                    <?php
                                    foreach($icons_array as $key => $value) {
                                        echo '<option value="'.esc_attr($value).'" '.selected($icon->icon_value,$value).' data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                                    } ?>
                                    </select>
                                </div>
                            <?php
                            }
                        }

                        if($repeater_title_control==true){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Title','lawyeriax-lite')?></span>
                            <input type="text" value="<?php if(!empty($icon->title)) echo esc_attr($icon->title); ?>" class="repeater_title_control" placeholder="<?php esc_html_e('Title','lawyeriax-lite'); ?>"/>
                        <?php
                        }

                        if($repeater_subtitle_control==true){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Subtitle','lawyeriax-lite')?></span>
                            <input type="text" value="<?php if(!empty($icon->subtitle)) echo esc_attr($icon->subtitle); ?>" class="repeater_subtitle_control" placeholder="<?php esc_html_e('Subtitle','lawyeriax-lite'); ?>"/>
                        <?php
                        }

                        if($repeater_text_control==true ){?>
                            <span class="customize-control-title"><?php esc_html_e('Text','lawyeriax-lite')?></span>
                            <span class="description customize-control-description"><?php esc_html_e('Allowed html: br, em, strong, a, button, ul, li','lawyeriax-lite');?></span>
                            <textarea class="repeater_text_control" placeholder="<?php esc_html_e('Text','lawyeriax-lite'); ?>"><?php if(!empty($icon->text)) {echo esc_attr($icon->text);} ?></textarea>
                        <?php
                        }

                        if($repeater_link_control){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Link','lawyeriax-lite')?></span>
                            <input type="text" value="<?php if(!empty($icon->link)) echo esc_url($icon->link); ?>" class="repeater_link_control" placeholder="<?php esc_html_e('Link','lawyeriax-lite'); ?>"/>
                        <?php
                        }

                        if($repeater_shortcode_control==true){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Shortcode','lawyeriax-lite')?></span>
                            <input type="text" value='<?php if(!empty($icon->shortcode)) echo $icon->shortcode; ?>' class="repeater_shortcode_control" placeholder="<?php esc_html_e('Shortcode','lawyeriax-lite'); ?>"/>
                        <?php
                        }

                        if( $repeater_socials_repeater_control==true ){ ?>
                            <span class="customize-control-title"><?php esc_html_e('Social icons','lawyeriax-lite'); ?></span>
                            <div class="repeater-social-repeater">
                            <?php
                            if(isset($icon->social_repeater) && !empty($icon->social_repeater)){
                                $show_del = 0;
                                $social_repeater = json_decode(html_entity_decode($icon->social_repeater), true);

                                foreach( $social_repeater as $social_icon ){
                                    $show_del++; ?>
                                    <div class="repeater-social-repeater-container">
                                        <div class="lawyeriax-dd">
                                            <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                                            <?php
                                            foreach($icons_array as $value) {
                                                echo '<option value="'.esc_attr($value).'" '.selected($social_icon['icon'], $value).' data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                                            } ?>
                                            </select>
                                        </div>
                                        <input type="text" class="repeater_social_repeater_link" placeholder="<?php esc_html_e( 'Link', 'lawyeriax-lite' ); ?>" value="<?php if( !empty($social_icon['link']) ) echo esc_url($social_icon['link']); ?>" >
                                        <button class="repeater_remove_social_item" style="<?php if($show_del == 1) echo "display:none"; ?>"><?php esc_html_e('X','lawyeriax-lite'); ?></button>
                                    </div>
                                <?php
                                } ?>
                                <input type="hidden" id="repeater_socials_repeater_colector" class="repeater_socials_repeater_colector" value="<?php echo esc_textarea( html_entity_decode( $icon->social_repeater ) ); ?>" />
                                </div>
                                <button class="repeater_add_social_item"><?php esc_html_e('Add icon','lawyeriax-lite'); ?></button>
                            <?php
                            } else { ?>
                                <div class="repeater-social-repeater-container">
                                  <div class="lawyeriax-dd">
                                        <select name="<?php echo esc_attr($this->id); ?>" class="repeater_icon_control">
                                        <?php
                                        foreach($icons_array as $value) {
                                            echo '<option value="'.esc_attr($value).'" '.selected($value,"No Icon").' data-iconclass="'.esc_attr($value).'" >'.esc_attr($value).'</option>';
                                        } ?>
                                        </select>
                                    </div>
                                    <input type="text" class="repeater_social_repeater_link" placeholder="<?php esc_html_e( 'Link', 'lawyeriax-lite' ); ?>" value="" >
                                    <button class="repeater_remove_social_item" style="display:none"><?php esc_html_e('X','lawyeriax-lite'); ?></button>
                                </div>
                                <input type="hidden" id="repeater_socials_repeater_colector" class="repeater_socials_repeater_colector" value="" />
                                </div>
                                <button class="repeater_add_social_item button button-primary"><?php esc_html_e('Add icon','lawyeriax-lite'); ?></button>
                            <?php
                            }
                        } ?>

                        <input type="hidden" class="repeater_box_id" value="<?php if(!empty($icon->id)) echo esc_attr($icon->id); ?>">
                        <button type="button" class="repeater_general_control_remove_field button" <?php if ($it == 0) echo 'style="display:none;"'; ?>><?php esc_html_e('Delete field','lawyeriax-lite'); ?></button>
                        </div><!-- end .repeater-box-content-hidden -->
                    </div><!-- end .repeater_general_control_repeater_container -->
                    <?php
                    $it++;
                }
            }
        }

        if ( !empty( $this_default ) && empty( $json ) ) { ?>
            <input type="hidden" id="repeater_<?php echo $options['section']; ?>_repeater_colector" <?php $this->link(); ?> class="repeater_repeater_colector" value="<?php  echo esc_textarea( json_encode($this_default )); ?>" />
        <?php
        } else { ?>
            <input type="hidden" id="repeater_<?php echo $options['section']; ?>_repeater_colector" <?php $this->link(); ?> class="repeater_repeater_colector" value="<?php echo esc_textarea( $this->value() ); ?>" />
        <?php
        } ?>
        </div>
        <button type="button"   class="button add_field repeater_general_control_new_field"><?php esc_html_e('Add new field','lawyeriax-lite'); ?></button>
    <?php
    }
}
