<?php

/**
 * @usage function to display Addons bundle sub menu
 */

add_action( 'admin_menu', 'wpcs_register_bundle_submenu', 20 );
/**
 * Adds a submenu page under a custom post type parent.
 */

function wpcs_register_bundle_submenu() {
	
	if ( ! function_exists( 'is_plugin_active' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
	
    if (  
		! is_plugin_active( 'wpcs-advance-settings-addon-premium/wpcs_advance_settings_addon.php' ) 
		&& ! is_plugin_active( 'wpcs-display-multiple-sliders-premium/wpcs_display_multiple_sliders.php' ) 
		&& ! is_plugin_active( 'wpcs-fontawesome-icon-addon-premium/wpcs_fontawesome_icon_addon.php' ) 
		&& ! is_plugin_active( 'wpcs-triggers-addon-premium/wpcs_triggers_addon.php' ) 
		) {
			add_submenu_page(
				'edit.php?post_type=wpcs',
				__( 'Unlock Pro Features', 'wpcs' ),
				'<span class="dashicons dashicons-star-filled"></span> ' . __( 'Unlock Pro Features', 'wpcs' ),
				'manage_options',
				//'wpcs-add-ons-bundle',
				'https://wpcontactslider.com/pricing/?utm_source=wordpress&utm_medium=Plugin&utm_campaign=submenu&utm_content=Unlock+Pro+Features'
			);
    }

}