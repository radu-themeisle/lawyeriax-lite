<?php
class LawyeriaX_Lite_Frontpage_Templates extends WP_Customize_Control{

    public function __construct( $manager, $id, $args = array() ) {
        parent::__construct( $manager, $id, $args );
    }

    public function render_content(){

    $lawyeriax_lite_all_pages_array = array(); // new array with all pages

		$lawyeriax_lite_all_pages = get_pages(); // get all pages

		if( !empty($lawyeriax_lite_all_pages) ):

			$lawyeriax_lite_all_pages_array[0] = "— Select —";

			foreach ( $lawyeriax_lite_all_pages as $lawyeriax_lite_page ):

				if( !empty($lawyeriax_lite_page->ID) && !empty($lawyeriax_lite_page->post_title) ):

    			$lawyeriax_lite_all_pages_array[$lawyeriax_lite_page->ID] = $lawyeriax_lite_page->post_title;

    		endif;

			endforeach;

    endif;

		if( !empty($lawyeriax_lite_all_pages_array) ): // change the frontpage control with the new array

      echo '<label>';
			echo '<span class="customize-control-title">'.esc_html( $this->label ).'</span>';
			echo '<select data-customize-setting-link="page_on_front" name="_customize-dropdown-pages-page_on_front" id="_customize-dropdown-pages-page_on_front">';

      foreach($lawyeriax_lite_all_pages_array as $lawyeriax_lite_all_pages_array_k => $lawyeriax_lite_all_pages_array_v):

  					$lawyeriax_lite_page_template = get_page_template_slug($lawyeriax_lite_all_pages_array_k);

  					if( !empty($lawyeriax_lite_page_template) ):
  						echo '<option value="'.$lawyeriax_lite_all_pages_array_k.'" template="'.$lawyeriax_lite_page_template.'">'.$lawyeriax_lite_all_pages_array_v.'</option>';
  					else:
  						echo '<option value="'.$lawyeriax_lite_all_pages_array_k.'" template="default">'.$lawyeriax_lite_all_pages_array_v.'</option>';
  					endif;


				endforeach;
		    echo '</select>';
  			echo '</label>';
  		endif;
    }
  }
?>
