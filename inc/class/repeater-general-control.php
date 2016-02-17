<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;
class LawyeriaX_General_Repeater extends WP_Customize_Control {
        private $options = array();
        public function __construct( $manager, $id, $args = array() ) {
            parent::__construct( $manager, $id, $args );
            $this->options = $args;
        }
        public function render_content() {
            $this_default = json_decode($this->setting->default);
            $values = $this->value();
            $json = json_decode($values);
            if(!is_array($json)) $json = array($values);
            $it = 0;
            $options = $this->options;
            if(!empty($options['lawyeriax_image_control'])){
                $lawyeriax_image_control = $options['lawyeriax_image_control'];
            } else {
                $lawyeriax_image_control = false;
            }
            if(!empty($options['lawyeriax_icon_control'])){
                $lawyeriax_icon_control = $options['lawyeriax_icon_control'];
                $icons_array = array('none' => 'none','500px' => 'fa-500px','amazon' => 'fa-amazon','android' => 'fa-android','behance' => 'fa-behance','behance-square' => 'fa-behance-square','bitbucket' => 'fa-bitbucket','bitbucket-square' => 'fa-bitbucket-square','american-express' => 'fa-cc-amex','diners-club' => 'fa-cc-diners-club','discover' => 'fa-cc-discover','jcb' => 'fa-cc-jcb','mastercard' => 'fa-cc-mastercard','paypal' => 'fa-cc-paypal','stripe' => 'fa-cc-stripe','visa' => 'fa-cc-visa','codepen' => 'fa-codepen','css3' => 'fa-css3','delicious' => 'fa-delicious','deviantart' => 'fa-deviantart','digg' => 'fa-digg','dribble' => 'fa-dribbble','dropbox' => 'fa-dropbox','drupal' => 'fa-drupal','facebook' => 'fa-facebook','facebook-official' => 'fa-facebook-official','facebook-square' => 'fa-facebook-square','flickr' => 'fa-flickr','foursquare' => 'fa-foursquare','git' => 'fa-git','git-square' => 'fa-git-square','github' => 'fa-github','github-alt' => 'fa-github-alt','github-square' => 'fa-github-square','google' => 'fa-google','google-plus' => 'fa-google-plus','google-plus-square' => 'fa-google-plus-square','html5' => 'fa-html5','instagram' => 'fa-instagram','joomla' => 'fa-joomla','jsfiddle' => 'fa-jsfiddle','linkedin' => 'fa-linkedin','linkedin-square' => 'fa-linkedin-square','opencart' => 'fa-opencart','openid' => 'fa-openid','paypal' => 'fa-paypal','pinterest' => 'fa-pinterest','pinterest-p' => 'fa-pinterest-p','pinterest-square' => 'fa-pinterest-square','rebel' => 'fa-rebel','reddit' => 'fa-reddit','reddit-square' => 'fa-reddit-square','share' => 'fa-share-alt','share-square' => 'fa-share-alt-square','skype' => 'fa-skype','slack' => 'fa-slack','soundcloud' => 'fa-soundcloud','spotify' => 'fa-spotify','stack-overflow' => 'fa-stack-overflow','steam' => 'fa-steam','steam-square' => 'fa-steam-square','tripadvisor' => 'fa-tripadvisor','tumblr' => 'fa-tumblr','tumblr-square' => 'fa-tumblr-square','twitch' => 'fa-twitch','twitter' => 'fa-twitter','twitter-square' => 'fa-twitter-square','vimeo' => 'fa-vimeo','vimeo-square' => 'fa-vimeo-square','vine' => 'fa-vine','whatsapp' => 'fa-whatsapp','wordpress' => 'fa-wordpress','yahoo' => 'fa-yahoo','youtube' => 'fa-youtube','youtube-play' => 'fa-youtube-play','youtube-squar' => 'fa-youtube-square');
            } else {
                 $lawyeriax_icon_control = false;
            }
            if(!empty($options['lawyeriax_title_control'])){
                $lawyeriax_title_control = $options['lawyeriax_title_control'];
            } else {
                $lawyeriax_title_control = false;
            }
            if(!empty($options['lawyeriax_subtitle_control'])){
                $lawyeriax_subtitle_control = $options['lawyeriax_subtitle_control'];
            } else {
                $lawyeriax_subtitle_control = false;
            }
            if(!empty($options['lawyeriax_text_control'])){
                $lawyeriax_text_control = $options['lawyeriax_text_control'];
            } else {
                $lawyeriax_text_control = false;
            }
            if(!empty($options['lawyeriax_link_control'])){
                $lawyeriax_link_control = $options['lawyeriax_link_control'];
            } else {
                $lawyeriax_link_control = false;
            }
 ?>

            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <div class="lawyeriax_general_control_repeater lawyeriax_general_control_droppable">
                <?php
                    if(empty($json)) {
                ?>
                        <div class="lawyeriax_general_control_repeater_container">
                            <div class="repeater-customize-control-title"><?php esc_html_e('LawyeriaX Lite','lawyeriax-lite')?></div>
                            <div class="repeater-box-content-hidden">
                                <?php
                                    if($lawyeriax_image_control == true && $lawyeriax_icon_control == true){ ?>
                                        <span class="customize-control-title"><?php esc_html_e('Image type','lawyeriax-lite');?></span>
                                        <select class="lawyeriax_image_choice">
                                            <option value="lawyeriax_icon" selected><?php esc_html_e('Icon','lawyeriax-lite'); ?></option>
                                            <option value="lawyeriax_image"><?php esc_html_e('Image','lawyeriax-lite'); ?></option>
                                            <option value="lawyeriax_none"><?php esc_html_e('None','lawyeriax-lite'); ?></option>
                                        </select>

                                        <p class="lawyeriax_image_control" style="display:none">
                                            <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite')?></span>
                                            <input type="text" class="widefat custom_media_url">
                                            <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                                        </p>

                                        <div class="lawyeriax_general_control_icon">
                                            <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite');?></span>
                                            <div class="lawyeriax-dd">
                                            <select class="lawyeriax_icon_control">
                                            <?php
                                                foreach($icons_array as $key => $value) {
                                                    echo '<option value="'.$value.'" data-iconclass="'.$value.'" >'.esc_attr($key).'</option>';
                                                }
                                            ?>
                                            </select>
                                          </div>
                                        </div>
                                <?php
                                    } else {
                                        if($lawyeriax_image_control ==true){	?>
                                            <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite')?></span>
                                            <p class="lawyeriax_image_control">
                                                <input type="text" class="widefat custom_media_url">
                                                <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                                            </p>
                                <?php
                                        }
                                       if($lawyeriax_icon_control ==true){
                                ?>
                                            <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                                            <div class="lawyeriax-dd">
                                              <select name="<?php echo esc_attr($this->id); ?>" class="lawyeriax_icon_control">
                                                  <?php
                                                      foreach($icons_array as $key => $value) {
                                                        echo '<option value="'.$value.'" data-iconclass="'.$value.'" >'.esc_attr($key).'</option>';
                                                      }
                                                  ?>
                                              </select>
                                            </div>
                                <?php   }
                                    }
                                    if($lawyeriax_title_control==true){
                                ?>
                                        <span class="customize-control-title"><?php esc_html_e('Title','lawyeriax-lite')?></span>
                                        <input type="text" class="lawyeriax_title_control" placeholder="<?php esc_html_e('Title','lawyeriax-lite'); ?>"/>
                                <?php
                                    }
                                    if($lawyeriax_subtitle_control==true){
                                ?>
                                        <span class="customize-control-title"><?php esc_html_e('Subtitle','lawyeriax-lite')?></span>
                                        <input type="text" class="lawyeriax_subtitle_control" placeholder="<?php esc_html_e('Subtitle','lawyeriax-lite'); ?>"/>
                                <?php
                                    }
                                    if($lawyeriax_text_control==true){?>
                                        <span class="customize-control-title"><?php esc_html_e('Text','lawyeriax-lite')?></span>
                                        <textarea class="lawyeriax_text_control" placeholder="<?php esc_html_e('Text','lawyeriax-lite'); ?>"></textarea>
                                <?php }
                                    if($lawyeriax_link_control==true){ ?>
                                        <span class="customize-control-title"><?php esc_html_e('Link','lawyeriax-lite')?></span>
                                        <input type="text" class="lawyeriax_link_control" placeholder="<?php esc_html_e('Link','lawyeriax-lite'); ?>"/>
                                <?php } ?>
                                <input type="hidden" class="lawyeriax_box_id">
                            <button type="button" class="lawyeriax_general_control_remove_field button" style="display:none;"><?php esc_html_e('Delete field','lawyeriax-lite'); ?></button>
                            </div>
                        </div>
                <?php
                    } else {
                        if ( !empty($this_default) && empty($json)) {
                            foreach($this_default as $icon){
                ?>
                                <div class="lawyeriax_general_control_repeater_container lawyeriax_draggable">
                                    <div class="repeater-customize-control-title"><?php esc_html_e('LawyeriaX Lite','lawyeriax-lite')?></div>
                                    <div class="repeater-box-content-hidden">
                                         <?php
                                            if($lawyeriax_image_control == true && $lawyeriax_icon_control == true){ ?>
                                                <span class="customize-control-title"><?php esc_html_e('Image type','lawyeriax-lite');?></span>
                                                <select class="lawyeriax_image_choice">
                                                    <option value="lawyeriax_icon" <?php selected($icon->choice,'lawyeriax_icon');?>><?php esc_html_e('Icon','lawyeriax-lite');?></option>
                                                    <option value="lawyeriax_image" <?php selected($icon->choice,'lawyeriax_image');?>><?php esc_html_e('Image','lawyeriax-lite');?></option>
                                                    <option value="lawyeriax_none" <?php selected($icon->choice,'lawyeriax_none');?>><?php esc_html_e('None','lawyeriax-lite');?></option>
                                                </select>

                                                <p class="lawyeriax_image_control"  <?php if(!empty($icon->choice) && $icon->choice!='lawyeriax_image'){ echo 'style="display:none"';}?>>
                                                    <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite');?></span>
                                                    <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                                    <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                                                </p>

                                                <div class="lawyeriax_general_control_icon" <?php  if(!empty($icon->choice) && $icon->choice!='lawyeriax_icon'){ echo 'style="display:none"';}?>>
                                                    <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite');?></span>
                                                    <div class="lawyeriax-dd">
                                                      <select name="<?php echo esc_attr($this->id); ?>" class="lawyeriax_icon_control">
                                                          <?php
                                                              foreach($icons_array as $key => $value) {
                                                                echo '<option value="'.$value.'" '.selected($icon->icon_value,$value).' data-iconclass="'.$value.'" >'.esc_attr($key).'</option>';
                                                              }
                                                          ?>
                                                      </select>
                                                  </div>
                                                </div>

                                        <?php
                                            } else {
                                        ?>
                                        <?php	if($lawyeriax_image_control==true){ ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite')?></span>
                                                    <p class="lawyeriax_image_control">
                                                        <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                                        <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                                                    </p>
                                        <?php	}
                                                if($lawyeriax_icon_control==true){ ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                                                    <div class="lawyeriax-dd">
                                                      <select name="<?php echo esc_attr($this->id); ?>" class="lawyeriax_icon_control">
                                                          <?php
                                                              foreach($icons_array as $key => $value) {
                                                                  echo '<option value="'.$value.'" '.selected($icon->icon_value,$value).' data-iconclass="'.$value.'" >'.esc_attr($key).'</option>';
                                                              }
                                                          ?>
                                                      </select>
                                                    </div>
                                        <?php
                                                }
                                            }
                                                if($lawyeriax_title_control==true){
                                        ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Title','lawyeriax-lite')?></span>
                                                    <input type="text" value="<?php if(!empty($icon->title)) echo esc_attr($icon->title); ?>" class="lawyeriax_title_control" placeholder="<?php esc_html_e('Title','lawyeriax-lite'); ?>"/>
                                        <?php
                                                }
                                                if($lawyeriax_subtitle_control==true){
                                        ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Subtitle','lawyeriax-lite')?></span>
                                                    <input type="text" value="<?php if(!empty($icon->subtitle)) echo esc_attr($icon->subtitle); ?>" class="lawyeriax_subtitle_control" placeholder="<?php esc_html_e('Subtitle','lawyeriax-lite'); ?>"/>
                                        <?php
                                                }
                                                if($lawyeriax_text_control==true){ ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Text','lawyeriax-lite')?></span>
                                                    <textarea placeholder="<?php esc_html_e('Text','lawyeriax-lite'); ?>" class="lawyeriax_text_control"><?php if(!empty($icon->text)) {echo esc_attr($icon->text);} ?></textarea>
                                        <?php	}
                                                if($lawyeriax_link_control){ ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Link','lawyeriax-lite')?></span>
                                                    <input type="text" value="<?php if(!empty($icon->link)) echo esc_url($icon->link); ?>" class="lawyeriax_link_control" placeholder="<?php esc_html_e('Link','lawyeriax-lite'); ?>"/>
                                        <?php	}?>
                                        <input type="hidden" class="lawyeriax_box_id" value="<?php if(!empty($icon->id)) echo esc_attr($icon->id); ?>">
                                    <button type="button" class="lawyeriax_general_control_remove_field button" <?php if ($it == 0) echo 'style="display:none;"'; ?>><?php esc_html_e('Delete field','lawyeriax-lite'); ?></button>
                                    </div>

                                </div>

                <?php
                                $it++;
                            }
                        } else {
                            foreach($json as $icon){
                    ?>
                                <div class="lawyeriax_general_control_repeater_container lawyeriax_draggable">
                                    <div class="repeater-customize-control-title"><?php esc_html_e('LawyeriaX Lite','lawyeriax-lite')?></div>
                                    <div class="repeater-box-content-hidden">
                                    <?php
                                    if($lawyeriax_image_control == true && $lawyeriax_icon_control == true){ ?>
                                        <span class="customize-control-title"><?php esc_html_e('Image type','lawyeriax-lite');?></span>
                                        <select class="lawyeriax_image_choice">
                                            <option value="lawyeriax_icon" <?php selected($icon->choice,'lawyeriax_icon');?>><?php esc_html_e('Icon','lawyeriax-lite');?></option>
                                            <option value="lawyeriax_image" <?php selected($icon->choice,'lawyeriax_image');?>><?php esc_html_e('Image','lawyeriax-lite');?></option>
                                            <option value="lawyeriax_none" <?php selected($icon->choice,'lawyeriax_none');?>><?php esc_html_e('None','lawyeriax-lite');?></option>
                                        </select>


                                        <p class="lawyeriax_image_control" <?php if(!empty($icon->choice) && $icon->choice!='lawyeriax_image'){ echo 'style="display:none"';}?>>
                                            <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite');?></span>
                                            <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                            <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                                        </p>

                                        <div class="lawyeriax_general_control_icon" <?php  if(!empty($icon->choice) && $icon->choice!='lawyeriax_icon'){ echo 'style="display:none"';}?>>
                                            <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite');?></span>
                                            <div class="lawyeriax-dd">
                                            <select name="<?php echo esc_attr($this->id); ?>" class="lawyeriax_icon_control">
                                            <?php
                                                foreach($icons_array as $key => $value) {
                                                    echo '<option value="'.$value.'" '.selected($icon->icon_value,$value).' data-iconclass="'.$value.'" >'.esc_attr($key).'</option>';
                                                }
                                            ?>
                                            </select>
                                          </div>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <?php
                                            if($lawyeriax_image_control == true){ ?>
                                                <span class="customize-control-title"><?php esc_html_e('Image','lawyeriax-lite')?></span>
                                                <p class="lawyeriax_image_control">
                                                    <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                                    <input type="button" class="button button-primary custom_media_button_repeater" value="<?php esc_html_e('Upload Image','lawyeriax-lite'); ?>" />
                                                </p>
                                        <?php }
                                            if($lawyeriax_icon_control==true){ ?>
                                                <span class="customize-control-title"><?php esc_html_e('Icon','lawyeriax-lite')?></span>
                                                <div class="lawyeriax-dd">
                                                <select name="<?php echo esc_attr($this->id); ?>" class="lawyeriax_icon_control">
                                                <?php
                                                    foreach($icons_array as $key => $value) {
                                                      echo '<option value="'.$value.'" '.selected($icon->icon_value,$value).' data-iconclass="'.$value.'" >'.esc_attr($key).'</option>';
                                                    }
                                                ?>
                                                </select>
                                              </div>
                                        <?php
                                            }
                                        }
                                        if($lawyeriax_title_control==true){
                                        ?>
                                            <span class="customize-control-title"><?php esc_html_e('Title','lawyeriax-lite')?></span>
                                            <input type="text" value="<?php if(!empty($icon->title)) echo esc_attr($icon->title); ?>" class="lawyeriax_title_control" placeholder="<?php esc_html_e('Title','lawyeriax-lite'); ?>"/>
                                        <?php
                                                }
                                        if($lawyeriax_subtitle_control==true){
                                        ?>
                                            <span class="customize-control-title"><?php esc_html_e('Subtitle','lawyeriax-lite')?></span>
                                            <input type="text" value="<?php if(!empty($icon->subtitle)) echo esc_attr($icon->subtitle); ?>" class="lawyeriax_subtitle_control" placeholder="<?php esc_html_e('Subtitle','lawyeriax-lite'); ?>"/>
                                        <?php
                                        }
                                        if($lawyeriax_text_control==true ){?>
                                            <span class="customize-control-title"><?php esc_html_e('Text','lawyeriax-lite')?></span>
                                            <textarea class="lawyeriax_text_control" placeholder="<?php esc_html_e('Text','lawyeriax-lite'); ?>"><?php if(!empty($icon->text)) {echo esc_attr($icon->text);} ?></textarea>
                                        <?php }
                                        if($lawyeriax_link_control){ ?>
                                            <span class="customize-control-title"><?php esc_html_e('Link','lawyeriax-lite')?></span>
                                            <input type="text" value="<?php if(!empty($icon->link)) echo esc_url($icon->link); ?>" class="lawyeriax_link_control" placeholder="<?php esc_html_e('Link','lawyeriax-lite'); ?>"/>
                                        <?php }?>
                                        <input type="hidden" class="lawyeriax_box_id" value="<?php if(!empty($icon->id)) echo esc_attr($icon->id); ?>">
                                        <button type="button" class="lawyeriax_general_control_remove_field button" <?php if ($it == 0) echo 'style="display:none;"'; ?>><?php esc_html_e('Delete field','lawyeriax-lite'); ?></button>
                                    </div>

                                </div>
                    <?php
                                $it++;
                            }
                        }
                    }
                if ( !empty($this_default) && empty($json)) {
                ?>
                    <input type="hidden" id="lawyeriax_<?php echo $options['section']; ?>_repeater_colector" <?php $this->link(); ?> class="lawyeriax_repeater_colector" value="<?php  echo esc_textarea( json_encode($this_default )); ?>" />
            <?php } else {	?>
                    <input type="hidden" id="lawyeriax_<?php echo $options['section']; ?>_repeater_colector" <?php $this->link(); ?> class="lawyeriax_repeater_colector" value="<?php echo esc_textarea( $this->value() ); ?>" />
            <?php } ?>
            </div>

            <button type="button"   class="button add_field lawyeriax_general_control_new_field"><?php esc_html_e('Add new field','lawyeriax-lite'); ?></button>

            <?php
    }
}
