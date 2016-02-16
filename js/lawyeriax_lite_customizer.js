function media_upload(button_class) {

	jQuery('body').on('click', button_class, function(e) {
		var button_id ='#'+jQuery(this).attr('id');
		var display_field = jQuery(this).parent().children('input:text');
		var _custom_media = true;

		wp.media.editor.send.attachment = function(props, attachment){

			if ( _custom_media  ) {
				if(typeof display_field != 'undefined'){
					switch(props.size){
						case 'full':
							display_field.val(attachment.sizes.full.url);
                            display_field.trigger('change');
							break;
						case 'medium':
							display_field.val(attachment.sizes.medium.url);
                            display_field.trigger('change');
							break;
						case 'thumbnail':
							display_field.val(attachment.sizes.thumbnail.url);
                            display_field.trigger('change');
							break;
						case 'repeater_team':
							console.log(attachment.sizes);
							display_field.val(attachment.sizes.repeater_team.url);
                            display_field.trigger('change');
							break
						case 'repeater_services':
							display_field.val(attachment.sizes.repeater_services.url);
                            display_field.trigger('change');
							break
						case 'repeater_customers':
							display_field.val(attachment.sizes.repeater_customers.url);
                            display_field.trigger('change');
							break;
						default:
							display_field.val(attachment.url);
                            display_field.trigger('change');
					}
				}
				_custom_media = false;
			} else {
				return wp.media.editor.send.attachment( button_id, [props, attachment] );
			}
		}
		wp.media.editor.open(button_class);
		window.send_to_editor = function(html) {

		}
		return false;
	});
}


var entityMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': '&quot;',
    "'": '&#39;',
    "/": '&#x2F;',
  };

  function escapeHtml(string) {
	  string = String(string).replace(new RegExp('\r?\n','g'), '<br />');
	  string = String(string).replace(/\\/g,'&#92;');
	  return String(string).replace(/[&<>"'\/]/g, function (s) {
      	return entityMap[s];
	  });

  }
/********************************************
*** Generate uniq id ***
*********************************************/
function repeater_uniqid(prefix, more_entropy) {

  if (typeof prefix === 'undefined') {
    prefix = '';
  }

  var retId;
  var formatSeed = function(seed, reqWidth) {
    seed = parseInt(seed, 10)
      .toString(16); // to hex str
    if (reqWidth < seed.length) { // so long we split
      return seed.slice(seed.length - reqWidth);
    }
    if (reqWidth > seed.length) { // so short we pad
      return Array(1 + (reqWidth - seed.length))
        .join('0') + seed;
    }
    return seed;
  };

  // BEGIN REDUNDANT
  if (!this.php_js) {
    this.php_js = {};
  }
  // END REDUNDANT
  if (!this.php_js.uniqidSeed) { // init seed with big random int
    this.php_js.uniqidSeed = Math.floor(Math.random() * 0x75bcd15);
  }
  this.php_js.uniqidSeed++;

  retId = prefix; // start with prefix, add current milliseconds hex string
  retId += formatSeed(parseInt(new Date()
    .getTime() / 1000, 10), 8);
  retId += formatSeed(this.php_js.uniqidSeed, 5); // add seed hex string
  if (more_entropy) {
    // for more entropy we add a float lower to 10
    retId += (Math.random() * 10)
      .toFixed(8)
      .toString();
  }

  return retId;
}



/********************************************
*** General Repeater ***
*********************************************/

function repeater_refresh_social_icons(th){
	var icons_repeater_values = [];
	th.find(".repeater-social-repeater-container").each(function(){
			var icon = jQuery(this).find(".dd-selected-text").text();
			var link = jQuery(this).find(".repeater_social_repeater_link").val();
			if( icon != ''){
				icons_repeater_values.push({
					"icon":icon,
					"link":link
				});
			}

		});
		th.find('.repeater_socials_repeater_colector').val(JSON.stringify(icons_repeater_values));
		repeater_refresh_general_control_values();
}

function repeater_refresh_general_control_values(){
	jQuery(".repeater_general_control_repeater").each(function(){
		var values = [];
		var th = jQuery(this);
		th.find(".repeater_general_control_repeater_container").each(function(){
			var icon_value = jQuery(this).find('.dd-selected-value').val();
			var text = jQuery(this).find(".repeater_text_control").val();
			if(text){
				text = text.replace(/(['"])/g, "\\$1");
			}
			var link = jQuery(this).find(".repeater_link_control").val();
			var image_url = jQuery(this).find(".custom_media_url").val();
			var choice = jQuery(this).find(".repeater_image_choice").val();
			var title = jQuery(this).find(".repeater_title_control").val();
			if(title){
				title = title.replace(/(['"])/g, "\\$1");
			}
			var subtitle = jQuery(this).find(".repeater_subtitle_control").val();
			if(subtitle){
				subtitle = subtitle.replace(/(['"])/g, "\\$1");
			}
			var id = jQuery(this).find(".repeater_box_id").val();

			var social_repeater = jQuery(this).find(".repeater_socials_repeater_colector").val();
            if( text !='' || image_url!='' || title!='' || subtitle!='' ){
                values.push({
                    "icon_value" : (choice === 'repeater_none' ? "" : icon_value) ,
                    "text" : text,
                    "link" : link,
                    "image_url" : (choice === 'repeater_none' ? "" : image_url),
                    "choice" : choice,
                    "title" : title,
                    "subtitle" : subtitle,
                    "social_repeater" : escapeHtml(social_repeater),
					"id" : id
                });
            }

        });
        th.find('.repeater_repeater_colector').val(JSON.stringify(values));
        th.find('.repeater_repeater_colector').trigger('change');
    });
}


jQuery(document).ready(function(){

	jQuery('.lawyeriax-dd').ddslick({
		onSelected: function(selectedData){
		}
	});

    jQuery('#customize-theme-controls').on('click','.repeater-customize-control-title',function(){
        jQuery(this).next().slideToggle('medium', function() {
            if (jQuery(this).is(':visible'))
                jQuery(this).css('display','block');
        });
    });

    jQuery('#customize-theme-controls').on('change','.repeater_image_choice',function() {
        if(jQuery(this).val() == 'repeater_image'){
            jQuery(this).parent().parent().find('.repeater_general_control_icon').hide();
            jQuery(this).parent().parent().find('.repeater_image_control').show();
        }
        if(jQuery(this).val() == 'repeater_icon'){
            jQuery(this).parent().parent().find('.repeater_general_control_icon').show();
            jQuery(this).parent().parent().find('.repeater_image_control').hide();
        }
        if(jQuery(this).val() == 'repeater_none'){
            jQuery(this).parent().parent().find('.repeater_general_control_icon').hide();
            jQuery(this).parent().parent().find('.repeater_image_control').hide();
        }

        repeater_refresh_general_control_values();
        return false;
    });
    media_upload('.custom_media_button_repeater');

    jQuery(".custom_media_url").live('change',function(){
        repeater_refresh_general_control_values();
        return false;
    });


	jQuery("#customize-theme-controls").on('change', '.dd-selected-value',function(){
		var check = jQuery(this).parent().parent().parent();
		if(check.hasClass('repeater-social-repeater-container')){
			repeater_refresh_social_icons(check.parent());
		} else {
			repeater_refresh_general_control_values();
		}
		return false;
	});

/**
 * This adds a new box to repeater
 *
 */
 jQuery("#customize-theme-controls").on("click", ".repeater_general_control_new_field",function(){
	var th = jQuery(this).parent();
	var id = 'repeater_' + repeater_uniqid();
	if( typeof th != 'undefined' ) {
		/* Clone the first box*/
		var field = th.find(".repeater_general_control_repeater_container:first").clone();

		if( typeof field != 'undefined' ){
			/*Set the default value for choice between image and icon to icon*/
        	field.find(".repeater_image_choice").val('repeater_icon');

			/*Show icon selector*/
			field.find('.repeater_general_control_icon').show();

			/*Hide image selector*/
			if(field.find('.repeater_general_control_icon').length > 0){
				field.find('.repeater_image_control').hide();
			}

			/*Show delete box button because it's not the first box*/
            field.find(".repeater_general_control_remove_field").show();

            /*Reinitialize ddslick*/
			field.find('.dd-container').before('<div class="lawyeriax-dd"><select name="repeater_social_icons" class="repeater_icon_control"> <option value="none" data-iconclass="none">none</option><option value="fa-500px" data-iconclass="fa-500px">fa-500px</option><option value="fa-amazon" data-iconclass="fa-amazon">fa-amazon</option><option value="fa-android" data-iconclass="fa-android">fa-android</option><option value="fa-behance" data-iconclass="fa-behance">fa-behance</option><option value="fa-behance-square" data-iconclass="fa-behance-square">fa-behance-square</option><option value="fa-bitbucket" data-iconclass="fa-bitbucket">fa-bitbucket</option><option value="fa-bitbucket-square" data-iconclass="fa-bitbucket-square">fa-bitbucket-square</option><option value="fa-cc-amex" data-iconclass="fa-cc-amex">fa-cc-amex</option><option value="fa-cc-diners-club" data-iconclass="fa-cc-diners-club">fa-cc-diners-club</option><option value="fa-cc-discover" data-iconclass="fa-cc-discover">fa-cc-discover</option><option value="fa-cc-jcb" data-iconclass="fa-cc-jcb">fa-cc-jcb</option><option value="fa-cc-mastercard" data-iconclass="fa-cc-mastercard">fa-cc-mastercard</option><option value="fa-paypal" data-iconclass="fa-paypal">fa-paypal</option><option value="fa-cc-stripe" data-iconclass="fa-cc-stripe">fa-cc-stripe</option><option value="fa-cc-visa" data-iconclass="fa-cc-visa">fa-cc-visa</option><option value="fa-codepen" data-iconclass="fa-codepen">fa-codepen</option><option value="fa-css3" data-iconclass="fa-css3">fa-css3</option><option value="fa-delicious" data-iconclass="fa-delicious">fa-delicious</option><option value="fa-deviantart" data-iconclass="fa-deviantart">fa-deviantart</option><option value="fa-digg" data-iconclass="fa-digg">fa-digg</option><option value="fa-dribbble" data-iconclass="fa-dribbble">fa-dribbble</option><option value="fa-dropbox" data-iconclass="fa-dropbox">fa-dropbox</option><option value="fa-drupal" data-iconclass="fa-drupal">fa-drupal</option><option value="fa-facebook" data-iconclass="fa-facebook">fa-facebook</option><option value="fa-facebook-official" data-iconclass="fa-facebook-official">fa-facebook-official</option><option value="fa-facebook-square" data-iconclass="fa-facebook-square">fa-facebook-square</option><option value="fa-flickr" data-iconclass="fa-flickr">fa-flickr</option><option value="fa-foursquare" data-iconclass="fa-foursquare">fa-foursquare</option><option value="fa-gavel" data-iconclass="fa-gavel">fa-gavel</option><option value="fa-git" data-iconclass="fa-git">fa-git</option><option value="fa-git-square" data-iconclass="fa-git-square">fa-git-square</option><option value="fa-github" data-iconclass="fa-github">fa-github</option><option value="fa-github-alt" data-iconclass="fa-github-alt">fa-github-alt</option><option value="fa-github-square" data-iconclass="fa-github-square">fa-github-square</option><option value="fa-google" data-iconclass="fa-google">fa-google</option><option value="fa-google-plus" data-iconclass="fa-google-plus">fa-google-plus</option><option value="fa-google-plus-square" data-iconclass="fa-google-plus-square">fa-google-plus-square</option><option value="fa-html5" data-iconclass="fa-html5">fa-html5</option><option value="fa-instagram" data-iconclass="fa-instagram">fa-instagram</option><option value="fa-joomla" data-iconclass="fa-joomla">fa-joomla</option><option value="fa-jsfiddle" data-iconclass="fa-jsfiddle">fa-jsfiddle</option><option value="fa-linkedin" data-iconclass="fa-linkedin">fa-linkedin</option><option value="fa-linkedin-square" data-iconclass="fa-linkedin-square">fa-linkedin-square</option><option value="fa-opencart" data-iconclass="fa-opencart">fa-opencart</option><option value="fa-openid" data-iconclass="fa-openid">fa-openid</option><option value="fa-pinterest" data-iconclass="fa-pinterest">fa-pinterest</option><option value="fa-pinterest-p" data-iconclass="fa-pinterest-p">fa-pinterest-p</option><option value="fa-pinterest-square" data-iconclass="fa-pinterest-square">fa-pinterest-square</option><option value="fa-rebel" data-iconclass="fa-rebel">fa-rebel</option><option value="fa-reddit" data-iconclass="fa-reddit">fa-reddit</option><option value="fa-reddit-square" data-iconclass="fa-reddit-square">fa-reddit-square</option><option value="fa-share-alt" data-iconclass="fa-share-alt">fa-share-alt</option><option value="fa-share-alt-square" data-iconclass="fa-share-alt-square">fa-share-alt-square</option><option value="fa-skype" data-iconclass="fa-skype">fa-skype</option><option value="fa-slack" data-iconclass="fa-slack">fa-slack</option><option value="fa-soundcloud" data-iconclass="fa-soundcloud">fa-soundcloud</option><option value="fa-spotify" data-iconclass="fa-spotify">fa-spotify</option><option value="fa-stack-overflow" data-iconclass="fa-stack-overflow">fa-stack-overflow</option><option value="fa-steam" data-iconclass="fa-steam">fa-steam</option><option value="fa-steam-square" data-iconclass="fa-steam-square">fa-steam-square</option><option value="fa-tripadvisor" data-iconclass="fa-tripadvisor">fa-tripadvisor</option><option value="fa-tumblr" data-iconclass="fa-tumblr">fa-tumblr</option><option value="fa-tumblr-square" data-iconclass="fa-tumblr-square">fa-tumblr-square</option><option value="fa-twitch" data-iconclass="fa-twitch">fa-twitch</option><option value="fa-twitter" data-iconclass="fa-twitter">fa-twitter</option><option value="fa-twitter-square" data-iconclass="fa-twitter-square">fa-twitter-square</option><option value="fa-vimeo" data-iconclass="fa-vimeo">fa-vimeo</option><option value="fa-vimeo-square" data-iconclass="fa-vimeo-square">fa-vimeo-square</option><option value="fa-vine" data-iconclass="fa-vine">fa-vine</option><option value="fa-whatsapp" data-iconclass="fa-whatsapp">fa-whatsapp</option><option value="fa-wordpress" data-iconclass="fa-wordpress">fa-wordpress</option><option value="fa-yahoo" data-iconclass="fa-yahoo">fa-yahoo</option><option value="fa-youtube" data-iconclass="fa-youtube">fa-youtube</option><option value="fa-youtube-play" data-iconclass="fa-youtube-play">fa-youtube-play</option><option value="fa-youtube-square" data-iconclass="fa-youtube-square">fa-youtube-square</option> </select></div>');

			field.find('.dd-container').remove();

			/*Remove all repeater fields except first one*/
			field.find(".repeater-social-repeater").find(".repeater-social-repeater-container").not(":first").remove();
			field.find(".repeater_social_repeater_link").val('');
			field.find(".repeater_socials_repeater_colector").val('');

			/*Initialize ddslick for the new box*/
			field.find('.lawyeriax-dd').ddslick({
				onSelected: function(selectedData){
				}
			});

			/*Remove value from text field*/
			field.find(".repeater_text_control").val('');

			/*Remove value from link field*/
			field.find(".repeater_link_control").val('');

			/*Set box id*/
			field.find(".repeater_box_id").val(id);

			/*Remove value from media field*/
			field.find(".custom_media_url").val('');

			/*Remove value from title field*/
			field.find(".repeater_title_control").val('');

			/*Remove value from subtitle field*/
			field.find(".repeater_subtitle_control").val('');

			/*Remove value from shortcode field*/
			field.find(".repeater_shortcode_control").val('');

			/*Append new box*/
			th.find(".repeater_general_control_repeater_container:first").parent().append(field);

			/*Refresh values*/
			repeater_refresh_general_control_values();
		}

	}
	return false;
});

	jQuery("#customize-theme-controls").on("click", ".repeater_general_control_remove_field",function(){
		if( typeof	jQuery(this).parent() != 'undefined'){
			jQuery(this).parent().parent().remove();
			repeater_refresh_general_control_values();
		}
		return false;
	});

	jQuery("#customize-theme-controls").on('keyup', '.repeater_title_control',function(){
		 repeater_refresh_general_control_values();
	});

	jQuery("#customize-theme-controls").on('keyup', '.repeater_subtitle_control',function(){
		 repeater_refresh_general_control_values();
	});

	jQuery("#customize-theme-controls").on('keyup', '.repeater_text_control',function(){
		 repeater_refresh_general_control_values();
	});

	jQuery("#customize-theme-controls").on('keyup', '.repeater_link_control',function(){
		repeater_refresh_general_control_values();
	});

	/*Drag and drop to change icons order*/
	jQuery(".repeater_general_control_droppable").sortable({
		update: function( event, ui ) {
			repeater_refresh_general_control_values();
		}
	});

});


/*--------------------------------------------------------*/
/*----------------- Socials Repeater ---------------------*/
/*--------------------------------------------------------*/
jQuery("#customize-theme-controls").on('click',".repeater_add_social_item", function( event ){
	event.preventDefault();
	var th = jQuery(this).parent();
	if(typeof th != 'undefined') {
		var field = th.find(".repeater-social-repeater-container:first").clone();
		if(typeof field != 'undefined'){
			field.find(".repeater_remove_social_item").show();
			field.find('.dd-container').before('<div class="lawyeriax-dd"><select name="repeater_social_icons" class="repeater_icon_control"> <option value="none" data-iconclass="none">none</option><option value="fa-500px" data-iconclass="fa-500px">fa-500px</option><option value="fa-amazon" data-iconclass="fa-amazon">fa-amazon</option><option value="fa-android" data-iconclass="fa-android">fa-android</option><option value="fa-behance" data-iconclass="fa-behance">fa-behance</option><option value="fa-behance-square" data-iconclass="fa-behance-square">fa-behance-square</option><option value="fa-bitbucket" data-iconclass="fa-bitbucket">fa-bitbucket</option><option value="fa-bitbucket-square" data-iconclass="fa-bitbucket-square">fa-bitbucket-square</option><option value="fa-cc-amex" data-iconclass="fa-cc-amex">fa-cc-amex</option><option value="fa-cc-diners-club" data-iconclass="fa-cc-diners-club">fa-cc-diners-club</option><option value="fa-cc-discover" data-iconclass="fa-cc-discover">fa-cc-discover</option><option value="fa-cc-jcb" data-iconclass="fa-cc-jcb">fa-cc-jcb</option><option value="fa-cc-mastercard" data-iconclass="fa-cc-mastercard">fa-cc-mastercard</option><option value="fa-paypal" data-iconclass="fa-paypal">fa-paypal</option><option value="fa-cc-stripe" data-iconclass="fa-cc-stripe">fa-cc-stripe</option><option value="fa-cc-visa" data-iconclass="fa-cc-visa">fa-cc-visa</option><option value="fa-codepen" data-iconclass="fa-codepen">fa-codepen</option><option value="fa-css3" data-iconclass="fa-css3">fa-css3</option><option value="fa-delicious" data-iconclass="fa-delicious">fa-delicious</option><option value="fa-deviantart" data-iconclass="fa-deviantart">fa-deviantart</option><option value="fa-digg" data-iconclass="fa-digg">fa-digg</option><option value="fa-dribbble" data-iconclass="fa-dribbble">fa-dribbble</option><option value="fa-dropbox" data-iconclass="fa-dropbox">fa-dropbox</option><option value="fa-drupal" data-iconclass="fa-drupal">fa-drupal</option><option value="fa-facebook" data-iconclass="fa-facebook">fa-facebook</option><option value="fa-facebook-official" data-iconclass="fa-facebook-official">fa-facebook-official</option><option value="fa-facebook-square" data-iconclass="fa-facebook-square">fa-facebook-square</option><option value="fa-flickr" data-iconclass="fa-flickr">fa-flickr</option><option value="fa-foursquare" data-iconclass="fa-foursquare">fa-foursquare</option><option value="fa-gavel" data-iconclass="fa-gavel">fa-gavel</option><option value="fa-git" data-iconclass="fa-git">fa-git</option><option value="fa-git-square" data-iconclass="fa-git-square">fa-git-square</option><option value="fa-github" data-iconclass="fa-github">fa-github</option><option value="fa-github-alt" data-iconclass="fa-github-alt">fa-github-alt</option><option value="fa-github-square" data-iconclass="fa-github-square">fa-github-square</option><option value="fa-google" data-iconclass="fa-google">fa-google</option><option value="fa-google-plus" data-iconclass="fa-google-plus">fa-google-plus</option><option value="fa-google-plus-square" data-iconclass="fa-google-plus-square">fa-google-plus-square</option><option value="fa-html5" data-iconclass="fa-html5">fa-html5</option><option value="fa-instagram" data-iconclass="fa-instagram">fa-instagram</option><option value="fa-joomla" data-iconclass="fa-joomla">fa-joomla</option><option value="fa-jsfiddle" data-iconclass="fa-jsfiddle">fa-jsfiddle</option><option value="fa-linkedin" data-iconclass="fa-linkedin">fa-linkedin</option><option value="fa-linkedin-square" data-iconclass="fa-linkedin-square">fa-linkedin-square</option><option value="fa-opencart" data-iconclass="fa-opencart">fa-opencart</option><option value="fa-openid" data-iconclass="fa-openid">fa-openid</option><option value="fa-pinterest" data-iconclass="fa-pinterest">fa-pinterest</option><option value="fa-pinterest-p" data-iconclass="fa-pinterest-p">fa-pinterest-p</option><option value="fa-pinterest-square" data-iconclass="fa-pinterest-square">fa-pinterest-square</option><option value="fa-rebel" data-iconclass="fa-rebel">fa-rebel</option><option value="fa-reddit" data-iconclass="fa-reddit">fa-reddit</option><option value="fa-reddit-square" data-iconclass="fa-reddit-square">fa-reddit-square</option><option value="fa-share-alt" data-iconclass="fa-share-alt">fa-share-alt</option><option value="fa-share-alt-square" data-iconclass="fa-share-alt-square">fa-share-alt-square</option><option value="fa-skype" data-iconclass="fa-skype">fa-skype</option><option value="fa-slack" data-iconclass="fa-slack">fa-slack</option><option value="fa-soundcloud" data-iconclass="fa-soundcloud">fa-soundcloud</option><option value="fa-spotify" data-iconclass="fa-spotify">fa-spotify</option><option value="fa-stack-overflow" data-iconclass="fa-stack-overflow">fa-stack-overflow</option><option value="fa-steam" data-iconclass="fa-steam">fa-steam</option><option value="fa-steam-square" data-iconclass="fa-steam-square">fa-steam-square</option><option value="fa-tripadvisor" data-iconclass="fa-tripadvisor">fa-tripadvisor</option><option value="fa-tumblr" data-iconclass="fa-tumblr">fa-tumblr</option><option value="fa-tumblr-square" data-iconclass="fa-tumblr-square">fa-tumblr-square</option><option value="fa-twitch" data-iconclass="fa-twitch">fa-twitch</option><option value="fa-twitter" data-iconclass="fa-twitter">fa-twitter</option><option value="fa-twitter-square" data-iconclass="fa-twitter-square">fa-twitter-square</option><option value="fa-vimeo" data-iconclass="fa-vimeo">fa-vimeo</option><option value="fa-vimeo-square" data-iconclass="fa-vimeo-square">fa-vimeo-square</option><option value="fa-vine" data-iconclass="fa-vine">fa-vine</option><option value="fa-whatsapp" data-iconclass="fa-whatsapp">fa-whatsapp</option><option value="fa-wordpress" data-iconclass="fa-wordpress">fa-wordpress</option><option value="fa-yahoo" data-iconclass="fa-yahoo">fa-yahoo</option><option value="fa-youtube" data-iconclass="fa-youtube">fa-youtube</option><option value="fa-youtube-play" data-iconclass="fa-youtube-play">fa-youtube-play</option><option value="fa-youtube-square" data-iconclass="fa-youtube-square">fa-youtube-square</option> </select></div>');
			field.find('.dd-container').remove();
			field.find('.lawyeriax-dd').ddslick({
				onSelected: function(selectedData){
				}
			});
			field.find('.repeater_social_repeater_link').val('');
			th.find(".repeater-social-repeater-container:first").parent().append(field);
			repeater_refresh_social_icons(th);
		}
	}
	return false;
});

jQuery("#customize-theme-controls").on('click','.repeater_remove_social_item', function( event ){
	event.preventDefault();
	var th = jQuery(this).parent();
	var repeater = jQuery(this).parent().parent();
	th.remove();
	repeater_refresh_social_icons(repeater);
	return false;
})

jQuery("#customize-theme-controls").on('keyup','.repeater_social_repeater_link', function( event ){
	event.preventDefault();
	var repeater = jQuery(this).parent().parent();
	repeater_refresh_social_icons(repeater);
	return false;
})
