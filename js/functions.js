/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */

( function($) {

	( function() {
		var container, button, menu, links, subMenus;

		container = document.getElementById( 'site-navigation' );
		if ( ! container ) {
			return;
		}

		button = container.getElementsByTagName( 'button' )[0];
		if ( 'undefined' === typeof button ) {
			return;
		}

		menu = container.getElementsByTagName( 'ul' )[0];

		// Hide menu toggle button if menu is empty and return early.
		if ( 'undefined' === typeof menu ) {
			button.style.display = 'none';
			return;
		}

		menu.setAttribute( 'aria-expanded', 'false' );
		if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
			menu.className += ' nav-menu';
		}

		button.onclick = function() {
			if ( -1 !== container.className.indexOf( 'toggled' ) ) {
				container.className = container.className.replace( ' toggled', '' );
				button.setAttribute( 'aria-expanded', 'false' );
				menu.setAttribute( 'aria-expanded', 'false' );
			} else {
				container.className += ' toggled';
				button.setAttribute( 'aria-expanded', 'true' );
				menu.setAttribute( 'aria-expanded', 'true' );
			}
		};

		// Get all the link elements within the menu.
		links    = menu.getElementsByTagName( 'a' );
		subMenus = menu.getElementsByTagName( 'ul' );

		// Set menu items with submenus to aria-haspopup="true".
		for ( var i = 0, len = subMenus.length; i < len; i++ ) {
			subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
		}

		// Each time a menu link is focused or blurred, toggle focus.
		for ( i = 0, len = links.length; i < len; i++ ) {
			links[i].addEventListener( 'focus', toggleFocus, true );
			links[i].addEventListener( 'blur', toggleFocus, true );
		}

		/**
		 * Sets or removes .focus class on an element.
		 */
		function toggleFocus() {
			var self = this;

			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					if ( -1 !== self.className.indexOf( 'focus' ) ) {
						self.className = self.className.replace( ' focus', '' );
					} else {
						self.className += ' focus';
					}
				}

				self = self.parentElement;
			}
		}
	} )();


	/*** Sticky header ***/
	var $body = jQuery( 'body' ),
		$nav  = jQuery( '.sticky-navigation' );
	var veryTopHeaderHeight,
		adminBarHeight,
		isAdminBar,
		limit;

	$(document).ready( function() {
		callback_mobile_dropdown();

		/*** Sticky header ***/
	    veryTopHeaderHeight = jQuery( '#top-bar' ).height();
	    adminBarHeight      = 32;
	    isAdminBar          = ( jQuery( '#wpadminbar').length != 0 ? true : false );
	    limit               = 0;
	} );
	$(window).load(function(){
		fixFooterBottom();
		stickyHeader();
	} );
	$(window).resize(function() {
		fixFooterBottom();
		stickyHeader();

	} );

	/*** DROPDOWN FOR MOBILE MENU */
	var callback_mobile_dropdown = function () {
		var $navLi = $('#site-navigation li');
	    $navLi.each(function(){
	        if ( $(this).find('ul').length > 0 && !$(this).hasClass('has_children') ){
	            $(this).addClass('has_children');
	            $(this).find('a').first().after('<p class="dropdownmenu"><i class="fa fa-angle-down"></i></p>');
	        }
	    });
	    $('.dropdownmenu').click(function(){
	        if( $(this).parent('li').hasClass('this-open') ){
	            $(this).parent('li').removeClass('this-open');
	        }else{
	            $(this).parent('li').addClass('this-open');
	        }
	    });
	};

	/*** STICKY FOOTER ****/
	function fixFooterBottom(){
		var $header      = $('#masthead'),
			$footer      = $('colophon'),
			$content     = $('#content');
		$content.css('min-height', '1px');
		var headerHeight  = $header.outerHeight(),
			footerHeight  = $footer.outerHeight(),
			contentHeight = $content.outerHeight(),
			windowHeight  = $(window).height();
		var totalHeight = headerHeight + footerHeight + contentHeight;
		if (totalHeight<windowHeight){
		  $content.css('min-height', windowHeight - headerHeight - footerHeight );
		}else{
		  $content.css('min-height','1px');
		}
	}


	/*** Sticky header ***/
	jQuery(window).scroll(function(){
	    /* sticky menu without top part */
	    if( window.innerWidth > 768 ) {
	        var window_offset  = $body.offset().top - jQuery(window).scrollTop();
	        if( isAdminBar ) {
	            limit = -veryTopHeaderHeight + adminBarHeight;
	        } else {
	            limit = -veryTopHeaderHeight;
	        }
	        if( window_offset < limit ) {
	            $nav.css('top', limit );
	        } else {
	            $nav.css('top', window_offset );
	        }
	    }
	});

	/*** Sticky header ***/
	function stickyHeader() {
		$( 'body' ).css( 'padding-top', $( '.sticky-navigation' ).height() );
	}






} )(jQuery,window)