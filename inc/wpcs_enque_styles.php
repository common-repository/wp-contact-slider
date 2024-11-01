<?php

/**
 * @author Mohammad Mursaleen
 * function To register and enqueue frontend styles
 **/
function wpcs_enque_front_styles() {
	// Calling style sheet for WP contact slider
	$style_url = plugins_url( 'css/style.css', dirname( __FILE__ ) );

	wp_register_style( 'wpcs_style.css', $style_url, false, false ); // phpcs:ignore
	wp_enqueue_style( 'wpcs_style.css' );

	

}


function wpcs_enque_backend_styles() {

	// Calling admin style sheet for WP contact slider
	if ( ! function_exists( 'is_plugin_active' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
	
    if (  
		! is_plugin_active( 'wpcs-advance-settings-addon-premium/wpcs_advance_settings_addon.php' ) 
		&& ! is_plugin_active( 'wpcs-display-multiple-sliders-premium/wpcs_display_multiple_sliders.php' ) 
		&& ! is_plugin_active( 'wpcs-fontawesome-icon-addon-premium/wpcs_fontawesome_icon_addon.php' ) 
		&& ! is_plugin_active( 'wpcs-triggers-addon-premium/wpcs_triggers_addon.php' ) 
		) {
			$admin_url = plugins_url( 'css/admin-style.css', dirname( __FILE__ ) );

			wp_register_style( 'wpcs_admin_style.css', $admin_url, false, false );
			wp_enqueue_style( 'wpcs_admin_style.css' );
    }

}

add_action( 'admin_enqueue_scripts', 'wpcs_enque_backend_styles' );
