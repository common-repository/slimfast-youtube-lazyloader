<?php
/*
Plugin Name: SlimFast - YouTube Lazyloader

Description: This minimalist lazyloader makes your video pages slimmer and faster. SlimFast replaces heavy YouTube iframes by their thumbnails. 1 click is enough to load & play each video, even on mobile!


Author: ThinkSmall
Version:     1.0.1
Author uri: https://thinksmall.me/about
Plugin URI:  https://thinksmall.me
*/
 
require_once plugin_dir_path(__FILE__) . 'slimfast-functions.php';

class SlimFast_Fields_Plugin {
	
	public function __construct() {
    add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ) );
	add_action( 'admin_init', array( $this, 'setup_sections' ) );
	add_action( 'admin_init', array( $this, 'setup_fields' ) );
}
	
	public function create_plugin_settings_page() {
    $page_title = 'SlimFast YouTube LazyLoader setting page';
    $menu_title = 'SlimFast YouTube LazyLoader';
    $capability = 'manage_options';
    $slug = 'slimfast_fields';
    $callback = array( $this, 'plugin_settings_page_content' );
    
    add_submenu_page( 'options-general.php', $page_title, $menu_title, $capability, $slug, $callback );
}
	
public function setup_sections() {
   add_settings_section( 'slimfast_section', '', array( $this, 'section_callback' ), 'slimfast_fields' );   
}
		
public function setup_fields() {
    $fields = array(
        array(
            'uid' => 'our_first_field',
            'label' => 'Maximum width of videos',
            'section' => 'slimfast_section',
            'type' => 'text',
            'options' => false,
            'placeholder' => 'enter value',
            'helper' => 'px',
            'supplemental' => 'Default value is 560px',
            'default' => ''
        )
    );
    foreach( $fields as $field ){
        add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'slimfast_fields', $field['section'], $field );
        register_setting( 'slimfast_fields', $field['uid'] );
    }
}
	
	public function field_callback( $arguments ) {
    $value = get_option( $arguments['uid'] ); 
    if( ! $value ) { 
        $value = $arguments['default']; 
    }

    switch( $arguments['type'] ){
        case 'text': 
            printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />', $arguments['uid'], $arguments['type'], $arguments['placeholder'], $value );
            break;
    }

    if( $helper = $arguments['helper'] ){
        printf( '<span class="helper"> %s</span>', $helper );
    }

    if( $supplimental = $arguments['supplemental'] ){
        printf( '<p class="description">%s</p>', $supplimental ); 
    }
}
	
	public function section_callback( $arguments ) {
    switch( $arguments['id'] ){
        case 'slimfast_section':
            echo 'Don\'t expect to see much here, SlimFast is one of these minimalist plugins. Call it lazy if you want, that is no insult for a LazyLoader. <br/>The philosophy behind this plugin is to cut options to the strict necessary to make your pages slimmer and faster when embedding YouTube videos.<br/> The only setting you might want to change is the maximum width of videos. <br/>By default, SlimFast will make it 650px, a little bit bigger than the default YouTube iframe size of 560px. Change that to any other value if it doesn\'t look good with your theme!';
            break;
    }
}
	
	public function plugin_settings_page_content() { ?>
    <div class="wrap">
        <h2>SlimFast - YouTube LazyLoader: Setting Page</h2>
        <form method="post" action="options.php">
            <?php
                settings_fields( 'slimfast_fields' );
                do_settings_sections( 'slimfast_fields' );
                submit_button();
            ?>
        </form>
    </div> <?php
	}		
}
new SlimFast_Fields_Plugin();