<?php

/*
Plugin Name: Easy Theme and Plugin Upgrades
Plugin URI: http://ithemes.com/
Description: This plugin allows for installed themes to be upgraded by using the Appearance > Add New Themes > Upload feature of WordPress. Without this plugin, themes can only be installed using this method, requiring you to first delete the theme before installing the newer version. Now features the same easy upgrading for plugins via the Plugins > Add New > Upload page.
Author: Chris Jean
Version: 0.0.2
Author URI: http://ithemes.com/
*/


if ( is_admin() )
	require_once(TRUETHEMES . '/upgrade/modify-installer.php' );
else
	require_once(TRUETHEMES . '/upgrade/show-maintenance-message.php' );
?>
