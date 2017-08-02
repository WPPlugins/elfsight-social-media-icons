<?php
/*
Plugin Name: Elfsight Social Media Icons
Description: Increasing followers and your social networks subscribers is fast and easy with the stylish and creative Elfsight plugin.
Plugin URI: https://elfsight.com/social-media-icons-widget/?utm_source=markets&utm_medium=wordpressorg&utm_campaign=social-media-icons&utm_content=plugin-site
Version: 1.0.0
Author: Elfsight
Author URI: https://elfsight.com/?utm_source=markets&utm_medium=wordpressorg&utm_campaign=social-media-icons&utm_content=plugins-list
*/

if (!defined('ABSPATH')) exit;

require_once('elfsight-portal/elfsight-portal.php');

new ElfsightPortal(array(
        'app_slug' => 'elfsight-social-media-icons',
        'app_name' => 'Social Media Icons',
        'app_version' => '1.0.0',

        'plugin_slug' => plugin_basename(__FILE__),
        'plugin_menu_icon' => plugins_url('assets/img/menu-icon.png', __FILE__),

        'embed_url' => 'https://apps.elfsight.com/embed/social-icons/?utm_source=portals&utm_medium=wordpress&utm_campaign=social-media-icons&utm_content=sign-up'
    )
);

?>