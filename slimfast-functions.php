<?php

add_filter('the_content', 'slimfast_yl');
	   
function slimfast_yl($slimfast_replace) {


	
	$slimfast_replace = preg_replace('/<iframe(?!iframe)(.+)youtube\.com\/embed\/(?!iframe)(?!videoseries)(.+?)\?(.+)<\/iframe>/', '<div class="slimfast_yl"><div class="slimfast_wrap"><div class="slimfast_player" data-embed="${2}" id="player_${2}"><div class="play-button"></div></div></div></div>', $slimfast_replace); 
	
	
			
			global $slimfast_check;
            $slimfast_check = preg_match( '/slimfast_player/i', $slimfast_replace, $result );
			return $slimfast_replace;
}

add_action("wp_footer", "slimfast_Add_Text");
 
function slimfast_Add_Text()
{
	
	global $slimfast_check;
	if ( $slimfast_check == 1 ) {
		
		
		wp_enqueue_script( 'slimfast', plugin_dir_url(__FILE__) . 'slimfast.js', array(), NULL);
		wp_enqueue_style( 'slimfast', plugin_dir_url(__FILE__) . 'slimfast.css', array(), NULL);
			
			$playerwidth = get_option('our_first_field');
	
	if (!empty($playerwidth) AND is_numeric($playerwidth) ) {
		echo '<style>.slimfast_yl {max-width:'.$playerwidth.'px !important}</style>';
	}
	}
}