<?php
/**
 * Plugin Name: Modify Post Title
 * Plugin URI: http://www.thinnycode.com/wordpress/plugins
 * Description: The very first plugin that I have ever created.
 * Version: 1.0.0
 * Author: Sutin injitt
 * Author URI: http://www.thinnycode.com
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function add_title_word($text) {
    return 'Title Post: <span style="color:red;">'.$text.'</span>';
}

add_filter('the_title','add_title_word'); // add title post pages