<?php
/*
Plugin Name: Price Table Widget
Description: This widget has been discontinued. Please install our widgets bundle plugin instead - https://wordpress.org/plugins/so-widgets-bundle/
Version: 1.2
Plugin URI: https://wordpress.org/plugins/so-widgets-bundle/
License: GPL3
License URI: https://www.gnu.org/copyleft/gpl.html
*/

define('SOW_PT_VERSION', '1.2');
define('SOW_PT_FILE', __FILE__);


function siteorigin_legacy_widget_plugin_pricetable_init(){
	if( class_exists('SiteOrigin_Widgets_Bundle') ) return;

	// Include the icons if they exist and we haven't already
	if( !defined('SITEORIGIN_WIDGETS_ICONS') && file_exists( plugin_dir_path(__FILE__).'/icons/icons.php' ) ) include plugin_dir_path(__FILE__).'/icons/icons.php';

	if( !class_exists('SiteOrigin_Widgets_Loader') ) include(plugin_dir_path(__FILE__).'base/loader.php');
	return new SiteOrigin_Widgets_Loader('price-table', __FILE__, plugin_dir_path(__FILE__).'inc/widget.php');
}
add_action('plugins_loaded', 'siteorigin_legacy_widget_plugin_pricetable_init', 1);